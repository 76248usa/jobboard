@extends('layouts.newadmin')



@section('content')

<div class="col-sm-6">




{!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]]) !!}

<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="row">

<div class="form-group">
  {!! Form::submit('Update Category',['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}




	{!! Form::model($category, ['method'=>'DELETE', 'action'=>['AdminCategoriesController@destroy', $category->id]]) !!}

<div class="form-group">
  {!! Form::submit('Delete Category',['class'=>'btn btn-danger']) !!}
</div>

{!! Form::close() !!}



</div>

</div>







@endsection