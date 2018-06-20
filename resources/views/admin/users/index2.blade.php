@extends('layouts.newapp2')

@section('content2')

  <table class="table table-hover">
<thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Role</th>
<th scope="col">Created</th>
<th scope="col">Update</th>
</tr>
</thead>
<tbody>

@if($users)

  @foreach($users as $user)

  <tr>
    <th scope="row">{{$user->id}}</th>
    <td><a href="{{route('users.edit', ['id' => $user->id]) }}">{{$user->name}}</td>

      <td>{{$user->email}}</td>
     

      @if($user->is_active == 1)
      <td>active</td>
      @else
      <td>user inactive</td>
      @endif

      <td>{{$user->created_at->diffForHumans()}}</td>
      <td>{{$user->updated_at->diffForHumans()}}</td>
      

  @endforeach

@endif

@endsection