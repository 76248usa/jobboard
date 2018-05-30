@extends('layouts.admin')

@section('content')
<h1>Applications</h1>

@foreach($applications as $application)

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Owner</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">{{$application->id}}</th>
      
      <td><a href="{{route('teacher.show', $application->id)}}">{{$application->applicant}}</a></td>
      <td>{{($application->post_id)}}</td>
      <td>{{strip_tags($application->body)}}</td>

      <td>

      @if($application->photo)

      <img src="http://localhost:8888/jobboard/public/images/{{$application->photo->file}}">

      @else

      "no file"

      @endif</td>

       
      
    

@endforeach


    </tr>
  </tbody>
</table> 

@endsection


