@extends('layouts.teacher_template')

@section('content')

<table class="table table-striped">
    <h1>Elementary School Positions</h1>
    <br>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category</th>
      <th scope="col">Photo</th>
      <th scope="col">Owner</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
    </tr>
  </thead>

  <tbody>
    @if($posts)

      @foreach($posts as $post)

        @if($post->category_id == 3)

    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
      <td>{{$post->photo_id}}</td>
      <td>{{$post->user->name}}</td>

      <td><div class="form-group">
 
      {!! Form::model($post, ['method'=>'PATCH', 'action'=>['AppliedToController@update, $post->id']]) !!}

        {{ Form::checkbox('choose') }}
 
      {!! Form::close() !!} 

      </div></td>

       <td>{{$post->title}}</td>
      <td>{{str_limit($post->body, 20)}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at->diffForHumans()}}</td>
      <td></td>
    </tr>

    <th>

      @endif

    @endforeach

  @endif

  </tbody>
</table> 


<table class="table table-striped">
    <h1>High School Positions</h1>
    <br>
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Category</th>
      <th scope="col">Photo</th>
      <th scope="col">Owner</th>
      <th scope="col">Title</th>
      <th scope="col">Body</th>
      <th scope="col">Created</th>
      <th scope="col">Updated</th>
    </tr>
  </thead>

  <tbody>
    @if($posts)

      @foreach($posts as $post)

        @if($post->category_id == 1)

    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
      <td>{{$post->photo_id}}</td>
      <td>{{$post->user->name}}</td>

      <td class="form-group">

      {!! Form::open(['method'=>'POST', 'action'=>'AppliedToController@store']) !!}
      
        {!! Form::checkbox('post_id') !!}
 
      {!! Form::close() !!} 

    </td>

       <td>{{$post->title}}</td>
      <td>{{str_limit($post->body, 20)}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at->diffForHumans()}}</td>
      <td></td>
    </tr>

      @endif

    @endforeach

  @endif

{!! Form::open(['method'=>'POST', 'action'=>'AppliedToController@store']) !!}
  <div class="form-group">
  {!! Form::submit('Create Post',['class'=>'btn btn-primary']) !!}
</div>

{!! Form::close() !!}

  </tbody>
</table> 


@endsection