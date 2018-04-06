<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\DB;
use Mail;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();

        $schedule->call(function() {

            $now = DB::select("SELECT CURDATE() as now");

            $user_details = DB::select("
                SELECT * FROM casualleaves JOIN users ON casualleaves.emp_id = users.emp_id WHERE casualleaves.end_date = ?
                ", array($now[0]->now));

            if($user_details <> NULL)
            {
                foreach($user_details as $user_details)
                {
                    //mail.
                    $data = array('name'=>$user_details->name,'id'=>$user_details->emp_id,'purpose'=>$user_details->purpose,'date'=>$user_details->start_date, 'end_date'=>$user_details->end_date,'days'=>$user_details->no_of_days,'contact'=>$user_details->contact_no, 'Recommending'=>$user_details->recommending,'Approving'=>$user_details->approving);

                    //send to user.
                    Mail::send(['text'=>'mail/joinreportuser'],$data,function($message) use ($user_details)
                    {
                        $message->to($user_details->email,$user_details->name)->subject('Joining Report Reminder');
                        $message->from('leavemanageriiti@gmail.com','Leave Manager');
                    });

                    //send to recommending authority.
                    if($user_details->emp_type == 'general')
                    {
                        $recommending_name = DB::select("
                            SELECT name FROM users WHERE email=?
                        ", array($user_details->recommending));

                        Mail::send(['text'=>'mail/joinreportrecommend'],$data,function($message) use ($user_details, $recommending_name)
                        {
                            $message->to($user_details->recommending,$recommending_name[0]->name)->subject('Joining Report Reminder');
                            $message->from('leavemanageriiti@gmail.com','Leave Manager');
                        });
                    }

                    //send to approving authority.
                    $approving_name = DB::select("
                            SELECT name FROM users WHERE email=?
                        ", array($user_details->approving));

                    Mail::send(['text'=>'mail/joinreportapproving'],$data,function($message) use ($user_details, $approving_name)
                    {
                        $message->to($user_details->approving,$approving_name[0]->name)->subject('Joining Report Reminder');
                        $message->from('leavemanageriiti@gmail.com','Leave Manager');
                    });
                }
            }

        })->daily();

    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
