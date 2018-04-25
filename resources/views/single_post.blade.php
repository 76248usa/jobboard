@extends('layouts.teacher_template')

@section('content')

<style>

.jumbotron {
	text-align: center;
}
h1 {
	color: #02548E;
}

</style>

	<div class="jumbotron">
		<div class="container">
  
		    <h1>{{$post->title}}</h1><br>
		    <p><b>ESSENTIAL JOB DUTIES AND RESPONSIBILITIES</b></p>
		    <p><i>{{$post->body}}</i></p>
		    <p><b>LOCATION:</b></p>
		    <p>{{$post->location}}</p>
		    <p><b>STARTING DATE:</b></p>
		    <p>{{$post->date_start}}</p>

		  
		  	<div style="position:absolute; right:450px;"> 
  				<p><a class="btn btn-primary btn-lg" href="https://www.applitrack.com/region11/onlineapp/_application.aspx?starting=true" role="button">Apply</a></p>
  			</div>
  			<br>

		</div>  
	</div>





@endsection
