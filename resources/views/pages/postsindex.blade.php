@extends('layout.base')

@section('content')
  <div class="post-action new-post">
    <a href="{{route('posts.create')}}">NUOVO POST</a>
  </div>

  <div class="container">
    @foreach ($posts as $key => $value)
      <div class="the-post">
        <h2>{{$value-> title}}</h2>
        <h3>{{$value->author}}</h3>
        <p>{{$value->description}}</p>

        <div class="post-action edit-post"> <a href="{{route('posts.edit', $value->id)}}">Modifica Post...</a></div>
        <div class="post-action delete-post"> <a href="{{route('posts.destroy', $value->id)}}">!!ELIMINA POST!!</a></div>
      </div>

    @endforeach
  </div>

@endsection
