@extends ('approving.approvinglayout')

@section('content')

<div class="container-fluid">
<div class="post-list">
<hr>
@foreach($user_details as $user_details)
<div class="hey">
    <section class="post-item">
        <header class="post-item-header">
           <p class="post-item-meta>
           <h6 class="post-item-title">BY - {{$user_details->emp_id}} - {{$user_details->name}}</h6>
         </p>
            </header>

        <div class="post-item-description">
            <p>
                Leave start date: {{$user_details->start_date}}
                Purpose Of Leave - {{$user_details->purpose}}
            </p>
        </div>

      <footer class="post-item-footer">
        <a class="post-item-more" href="/approval/{{$user_details->ID}}">Read Full Details</a>
      </footer>
    </section>
  </div>
<hr>
@endforeach
    </div>
</div>

@endsection
