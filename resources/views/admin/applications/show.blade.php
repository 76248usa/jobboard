@extends('layouts.newadmin')

@section('content')

<h1>Applications</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Owner</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Body</th>
      <th scope="col">File</th>
       
      <th scope="col">Created</th>
      
    </tr>
  </thead>

  @foreach($applications as $application)

  <tbody>
    <tr>
      <th scope="row">{{$application->id}}</th>
      
      <td><a href="{{route('teacher.show', $application->id)}}">{{$application->applicant}}</a></td>
      <td>{{($application->email)}}</td>
      <td>{{($application->address)}}</td>
      <td>{{strip_tags(str_limit($application->body,30))}}</td>
     
      <td>

      @if($application->photo)

      <img height = "50px" src="http://localhost:8888/jobboard/public/images/{{$application->photo->file}}">

      @else

      "no file"

      @endif </td>
      <td>{{($application->created_at->diffforhumans())}}</td>

       
@endforeach


    </tr>
  </tbody>
</table> 

@endsection


