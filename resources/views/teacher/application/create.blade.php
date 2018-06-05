@extends('layouts.teacher_template')

@section('content')

@include('includes.tiny')

<style>

.jumbotron {
  text-align: center;
}


</style>

<h1 style="text-align: center";>Create Application</h1>

@if(Auth::check())

<div class="col-sm-8 ">

{!! Form::open(['method'=>'POST', 'action'=> ['PostsApplicationsController@store', $post->id], 'files'=>true])!!}

<div class="form-group">
  {!! Form::label('applicant', 'First, middle and last name:') !!}
  {!! Form::text('applicant', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('address', 'Address:') !!}
  {!! Form::text('address', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('email', 'Email:') !!}
  {!! Form::email('email', null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('file', 'Upload Resume:') !!}
  {!! Form::file('file', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::label('body', 'Write Resume:') !!}
  {!! Form::textarea('body', null,['class'=>'form-control']) !!}
</div>



<div>
{!! Form::hidden('role_id', 2) !!}
</div>

<div>
{!! Form::hidden('is_active', 1) !!}
</div>

<div class="form-group">
  {!! Form::submit('Submit Application',['class'=>'btn btn-primary']) !!}
</div>
<br>

{!! Form::close() !!} 

</div>

@endif



@include('includes.error')

@endsection

@section('scripts')

<script type="text/javascript">
alert("Sign  Up or Log In");
</script>

@endsection






</div>



<!--  -->

