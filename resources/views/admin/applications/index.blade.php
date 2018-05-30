@extends('layouts.newadmin')

@section('content')

<table class="table table-striped">
  <thead>
    <tr>
      
      <th scope="col">Owner</th>
      <th scope="col">View</th>
      <th scope="col">Email</th>
      <th scope="col">Body</th>
      <th scope="col">Created</th>
    </tr>
  </thead>

  <tbody>

      @foreach($applications as $application)

    <tr>
      <td>{{$application->applicant}}</td>
      <th><a href="{{route('teacher.show', $application->id)}}">Application</a></th>
      <td>{{$application->email}}</td>
      <td>{{strip_tags(substr($application->body,0,100))}}</td>
      <td>{{$application->created_at}}</td>


       
      
   

    @endforeach

    

     </tr>

  </tbody>
</table> 

@endsection

