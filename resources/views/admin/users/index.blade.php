@extends('layouts.admin')


@section('content')

@if(Session::has('deleted_user'))
  <div class="alert alert-danger">
    <h4>{{session('deleted_user')}}</h4>
  </div>
@endif

@if(Session::has('updated_user'))
  <div class="alert alert-danger">
    <h4>{{session('updated_user')}}</h4>
  </div>
@endif

<style type="text/css">
img {
  border-radius: 25px;
}
</style>

  <div class=col-md-8>
    <table class="table table-hover">
<thead>
<tr>
<th scope="col">Id</th>
<th scope="col">Photo</th>
<th scope="col">Name</th>
<th scope="col">Email</th>
<th scope="col">Role</th>
<th scope="col">Status</th>
<th scope="col">Created</th>
<th scope="col">Update</th>
<th scope="col">Delete</th>
</tr>
</thead>
<tbody>

@if($users)
  @foreach($users as $user)
  <tr>
    <th scope="row">{{$user->id}}</th>

     <td>@if($user->photo)
     <!-- <img height="50" border-radius="50px" src="http://localhost:8888/jobboard/public/images/{{($user->photo->file)}}" alt=""> -->
     <img height="50" border-radius="50px" src="{{($user->photo->file)}}" alt="">
     @else
     <img height="50" src="http://localhost:8888/jobboard/public/images/avatar.png" alt="">
     @endif</td>

     <td><a href="{{route('users.edit', ['id' => $user->id]) }}">{{$user->name}}</a></td>

      <td>{{$user->email}}</td>
      <td>{{$user->role->name}}</td>

      @if($user->is_active == 1)
      <td>active</td>
      @else
      <td>user inactive</td>
      @endif

      <td>{{$user->created_at->diffForHumans()}}</td>
      <td>{{$user->updated_at->diffForHumans()}}</td>
      <td><a href="{{route('users.destroy', ['id' => $user->id]) }}">Delete</a></td>
      </tr>
  @endforeach
@endif
</tbody>
</table>

</div>

@endsection
