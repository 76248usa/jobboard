@extends('layouts.admin')

@section('content')

<style>
img {
  border-radius: 50px;
}

</style>

<h2>Edit User</h2>

<div class="col-sm-3">

  @if($user->photo)
  <!-- <img src="{{$user->photo->file}}" alt="" height="150" class="img-responsive"> -->
  <img height="150" border-radius="50px" src="http://localhost:8888/jobboard/public/images/{{($user->photo->file)}}">
  @else
  <img src="{{'http://placehold.it/'}}" alt="" height="150" class="img-responsive">
  @endif

  <!-- <img src="{{$user->photo ? $user->photo->file : 'http://placehold.it/'}}" alt="" height="150" class="img-responsive"> -->
</div>

<div class="col-sm-9">

{!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id],'files'=>true]) !!}

<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('email', 'Email:') !!}
  {!! Form::email('email', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('role_id', 'Role:') !!}
  {!! Form::select('role_id', $roles ,null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('is_active', 'Status:') !!}
  {!! Form::select('is_active',array(1=>'Active',0=>'Not Active'),null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('photo_id', 'Photo:') !!}
  {!! Form::file('photo_id', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('password', 'Password:') !!}
  {!! Form::password('password',['class'=>'form-control']) !!}
</div>

</div>

<div class="row">

<div class="form-group">
  {!! Form::submit('Update User',['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}



{!! Form::open(['method'=>'DELETE', 'action'=>['AdminUsersController@destroy', $user->id]]) !!}

<div class="form-group">
  {!! Form::submit('Delete User',['class'=>'btn btn-danger']) !!}
</div>

{!! Form::close() !!}

</div>

<script>

function myFunction(){
  alert("This action will update/delete the user");
}

</script>



@include('includes.error')




@endsection
