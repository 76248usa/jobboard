@extends('layouts.admin')



@section('content')

<div class="row">

<div class="col-sm-6">

	{!! Form::model($category, ['method'=>'PATCH', 'action'=>['AdminCategoriesController@update', $category->id]) !!}

<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
  {!! Form::submit('Update Category',['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}


</div>

<div class="col-sm-6">

	@if($categories)

<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Name</th>
      <th scope="col">Created At</th>
    </tr>
  </thead>

  <tbody>

  	@foreach($categories as $category)
    <tr>
      <th scope="row">{{$category->id}}</th>
      <td>{{$category->name}}</td>
      <td>{{$category->created_at ? $category->created_at->diffForHumans() : 'no date'}}</td>
    </tr>

    @endforeach
    
  </tbody>

 </table>

@endif

</div>

</div>



@endsection