<!-- 
<link href="/css/nav.css" rel="stylesheet">	

<header>
	<div class="blog-masthead">
	  <div class="container">
	    <nav class="nav">
	      <a class="nav-link active" href="#">Home</a>
	      	@if(Auth::check())
		      	<a class="nav-link" href="#">{{ Auth::user()->name }} </a>
		      	<a class="nav-link ml-auto" href="/logout">Logout</a>
	      @endif 
	    </nav>
	  </div>
	</div>
</header> -->

<!-- <link href="/css/nav.css" rel="stylesheet">	

<header role="banner">
			<nav class="navbar">
			<div class="container">
  				<ul class="nav">
    					<li><a href="/recommend">All</a></li>
    					<li><a href="/leavepending">Pending</a></li>
    					<li><a href="/leaverecommended">Recommended</a></li>
    					<li><a href="/leavereverted">Reverted Back</a></li>
  				</ul>
			</div>/.container
			</nav>/.navbar
</header> -->


<!-- Custom css for navbar -->
@section('nav')
<header>
	<div class="blog-masthead">
	  <div class="container">
	    <nav class="nav nav-inverse">
	      <a class="nav-link active" href="/">Home</a>
	      @if(Auth::check())
		      	<a class="nav-link" href="#">{{ Auth::user()->name }} </a>
		      	<a class="nav-link ml-auto" href="/logout">Logout</a>
	      @endif 
	    </nav>
	  </div>
	</div>
</header>
@endsection
