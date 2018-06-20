@extends('layouts.newadmin')

@section('content')

<h1>Posts</h1>

<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Title</th>
      <th scope="col">Category</th>
      <th scope="col">Location</th>
      <th scope="col">Body</th>
      <th scope="col">Created</th>
      <th scope="col">View</th>

      
    </tr>
  </thead>

  <tbody>
    

  @if($posts)

  @foreach($posts as $post)

  <tr>
    <td>{{$post->id}}</td>
    <td><a href = "{{route('posts.edit', $post->id)}}">{{$post->title}}</a></td>
    <td>{{$post->category ? $post->category->name : 'Uncategorized'}}</td>
    <td>{{$post->location}}</td>
    <td>{{strip_tags(str_limit($post->body, 20))}}</td>
    <td>{{$post->created_at->diffForHumans()}}</td> 

    <td><a href = "{{route('applications.show', $post->id)}}">Applications</a></td>

  </tr>

  @endforeach

  @endif

  </tbody>
</table> 


@endsection
