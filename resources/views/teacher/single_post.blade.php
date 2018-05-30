@extends('layouts.newapp2')

@section('content')

<style>

.jumbotron {
	text-align: center;
}

#form-font {
  font-family: "Raleway", sans-serif;
  font-weight: lighter;
}







</style>

<!-- <script>
	
function myFunction() {
    alert("I am an alert box!");
}
</script> -->

 <!-- <nav class="navbar navbar-default navbar-static-top">
                <div class="container">


                    <div class="collapse navbar-collapse" id="app-navbar-collapse">

                        <ul class="nav navbar-nav">
                            &nbsp;
                        </ul>

                        <!Right Side Of Navbar -->
                       <!--  <ul class="nav navbar-nav navbar-right">
                            <! Authentication Links -->
                           <!--  @if (Auth::guest())
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

                            @endif -->
                        <!-- </ul>
 


                    </div>
                </div>
            </nav>
  -->
       <br>
		    <h3>{{$post->title}}</h3><br>
		    <p>ESSENTIAL JOB DUTIES AND RESPONSIBILITIES</p>
		    <p><i>{{ strip_tags($post->body) }}</i></p>
		    <p>LOCATION:</p>
		    <p>{{$post->location}}</p>
		    <p>STARTING DATE:</p>
		    <p>{{$post->date_start}}</p>



<style>


</style>
@endsection   

@section('content2')
<br>
<h1 style="text-align: center";>Create Application</h1>
<br>
@if(Auth::check())

<div class="col-sm-12 ">



{!! Form::open(['method'=>'POST', 'action'=> 'AdminApplicationsController@store', 'files'=>true])!!}

<div id="form-font" class="form-group">
  {!! Form::label('applicant', 'First, middle and last name:') !!}
  {!! Form::text('applicant', null,['class'=>'form-control']) !!}
</div>

<input type="number" name="post_id" value="{{$post->id}}">

<div class="form-group">
  {!! Form::label('address', 'Address:') !!}
  {!! Form::email('address', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('email', 'Email:') !!}
  {!! Form::email('email', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('photo_id', 'Upload Resume:') !!}
  {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
</div>

@include('includes.tiny')

<div class="form-group">
  {!! Form::label('body', 'Create Resume:') !!}
  {!! Form::textarea('body', null,['class'=>'form-control']) !!}
</div>




<div>
{!! Form::hidden('role_id', 2) !!}
</div>

<div>
{!! Form::hidden('location', $post->location) !!}
</div>


<div>
{!! Form::hidden('is_active', 1) !!}
</div>

<div class="form-group">
  {!! Form::submit('Submit Application',['class'=>'btn btn-primary']) !!}
</div>

@if(Session::has('application_message'))

  <p>{{session('application_message')}}</p>

 @endif

{!! Form::close() !!} 

 



@include('includes.error')

@endsection

@section('scripts')

@endsection

@endif



</div>









