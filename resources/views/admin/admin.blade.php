@extends ('admin.layoutadmin')



@section('content')

<div class="container-fluid">
<div class="post-list">
<hr>
@foreach($user_details as $user_details)
<div class="hey">
    <section class="post-item">
        <header class="post-item-header">
          <h5 class="post-item-title">BY - {{$user_details->emp_id}} - {{$user_details->name}}</h5>
            </header>
            <br>
            <p>
                Leave start date: {{$user_details->start_date}}
                <br>
                Purpose Of Leave - {{$user_details->purpose}}
                <br><a class="post-item-more" href="/admin/{{$user_details->ID}}">Read Full Details</a>

            </p>
        </section>
  </div>
<hr>
@endforeach
    </div>
</div>

@endsection
