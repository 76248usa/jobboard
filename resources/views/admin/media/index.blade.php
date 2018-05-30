@extends('layouts.newadmin')

@section('content')

<h2>Media</h2>

@if($photos)

<table class="table">
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Created</th>
		</tr>
	</thead>

	<tbody>

		@foreach($photos as $photo)

		<tr>
			<td>{{$photo->id}}</td>
			<td><img height="50" border-radius="50px" src="http://localhost:8888/jobboard/public/images/{{($photo->file)}}" alt=""></td>
			<!-- <td><img src="{{$photo->file}}" alt= ""></td> -->
			<td>{{$photo->created_at ? $photo->created_at : 'no date' }}</td>

			<td>
				{!! Form::open(['method'=>'DELETE', 'action'=>['AdminMediasController@destroy', $photo->id]]) !!}

				<div class="form-group">
  					{!! Form::submit('Delete File ',['class'=>'btn btn-danger']) !!}
				</div>

				{!! Form::close() !!}


			</td>
			

		</tr>

		@endforeach

	</tbody>

</table>

	@endif

<link rel = "stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.css">

@endsection


@section('content')

<h2>Upload Media</h2>

{!! Form::open( ['method'=>'POST', 'action'=>'AdminMediasController@store']) !!}

<div class="form-group">
  {!! Form::label('name', 'Name:') !!}
  {!! Form::text('name',null,['class'=>'form-control']) !!}
</div>

<div class="row">




<div class="form-group">
  {!! Form::submit('Upload Media',['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}


@endsection

@section('scripts')

<script src = "https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.4.0/min/dropzone.min.js"></script>

@endsection
