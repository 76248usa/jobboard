@extends('layouts.newapp2')

@section('content2')

<style>

.row {
  color: black;
}

</style>

<br><br>

<div class="row">

<div class="col-md-8 col-md-offset-2">

  <h2>Edit User</h2>

  <br>

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

</div>

@include('includes.error')

@endsection




