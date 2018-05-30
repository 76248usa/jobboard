@extends('layouts.newadmin')

@section('content')

<div class="wrapper">
	<section class="panel panel-primary">
		<div class="panel-heading">
			<h3>Download File</h3>
		</div>

		<div class="panel-body">
			<table class="table table-bordered">
				<thead>
					<th>Applicant Name</th>
					<th>Title</th>
					<th>Upload Date</th>
					<th>Action</th>
				</thead>
				<tbody>
					@foreach($downloads as $download)
					<tr>
						
						<td>{{$user->name}}</td>
						<td>{{$download->file}}</td>
						<td>{{$download->created_at}}</td>
						<td><a href="http://localhost:8888/jobboard/public/images/{{$download->file}}" download = "{{$download->file}}">
							<button class="btn btn-primary">
							<i class="glyphicon glyphicon-download">
							</i>Download</button>

							



						</a></td>

						
					</tr>
					@endforeach
				</tbody>

			</table>
			
		</div>

	</section>



</div>


@endsection
