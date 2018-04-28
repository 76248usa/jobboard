@extends('layouts.teacher_template')

@section('content')

<style>

.jumbotron {
	text-align: center;
}


</style>

<!-- <script>
	
function myFunction() {
    alert("I am an alert box!");
}
</script> -->

 <nav class="navbar navbar-default navbar-static-top">
                <div class="container">


                    <div class="collapse navbar-collapse" id="app-navbar-collapse">

                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!-- Right Side Of Navbar -->
                        <ul class="nav navbar-nav navbar-right">
                            <!-- Authentication Links -->
                            @if (Auth::guest())
                                <li><a href="{{ route('login') }}">Login</a></li>
                                <li><a href="{{ route('register') }}">Register</a></li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu" role="menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                         document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>

                            @endif
                        </ul>



                    </div>
                </div>
            </nav>

            

	<div class="jumbotron">
		<div class="container">
  
		    <h1>{{$post->title}}</h1><br>
		    <p><b>ESSENTIAL JOB DUTIES AND RESPONSIBILITIES</b></p>
		    <p><i>{{$post->body}}</i></p>
		    <p><b>LOCATION:</b></p>
		    <p>{{$post->location}}</p>
		    <p><b>STARTING DATE:</b></p>
		    <p>{{$post->date_start}}</p>
		  
		  	<div > 
  				
  				<p><a class="btn btn-primary btn-lg" href = "{{route('applications.create')}}" role="button">Apply</a></p>
  			</div>
		</div>  
	</div>





@endsection

@section('scripts')

@endsection



