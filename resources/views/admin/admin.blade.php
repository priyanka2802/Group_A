@extends ('admin.layoutadmin')

@section('head')

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

@endsection

@section('content')

<div class="container-fluid">
<div class="post-list">
<hr>
@foreach($user_details as $user_details)
<div class="hey">
    <section class="post-item">
        <header class="post-item-header">
           <p class="post-item-meta">
             <span class="post-item-date">Leave start date: {{$user_details->start_date}}</span>
            </p>
            <h2 class="post-item-title">BY - {{$user_details->emp_id}} - {{$user_details->name}}</h2>
        </header>

        <div class="post-item-description">
            <p>
                Purpose Of Leave - {{$user_details->purpose}}
            </p>
        </div>

      <footer class="post-item-footer">
        <a class="post-item-more" href="/admin/{{$user_details->ID}}">Read Full Details</a>
      </footer>
    </section>
  </div>
<hr>
@endforeach
    </div>
</div>

@endsection


