@extends('layouts.admin')

@section('content')
<h1>Posts</h1>

<table class="table table-striped">
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
    <tr>
      <th scope="row">{{$post->id}}</th>
      <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
      <td>{{$post->photo_id}}</td>
      <td>{{$post->user->name}}</td>
      <td>{{$post->title}}</td>
      <td>{{$post->body}}</td>
      <td>{{$post->created_at}}</td>
      <td>{{$post->updated_at->diffForHumans()}}</td>
      <td></td>
    </tr>
    @endforeach
  @endif

  </tbody>
</table>


@endsection
