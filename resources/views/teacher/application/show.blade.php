@extends('layouts.newapp')

@section('content')

<h1>Applicant</h1>

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


            <h3>{{$application->applicant}}</h3><br>
		    <p>{{$application->email}}</p>
		     <p>{{$application->address}}</p>

		    <p><i>{{strip_tags($application->body)}}</i></p>

             <p><i>{{$application->photo_id}}</i></p>

             <p>@if($application->photo_id)

                 <img height="50" border-radius="50px" src="http://localhost:8888/jobboard/public/images/{{($photo->file)}}" alt="">

            @endif</p>

             
             

	
<style>

.jumbotron {
  text-align: center;
}


</style>

@endsection