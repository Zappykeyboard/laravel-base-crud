@extends('layout.base')

@section('content')
  <a href="{{route('posts.name')}}">INDIETRO</a>
  <h1>Crea Nuovo Post</h1>
    <form  action="{{route('posts.update', $post->id)}}" method="post">
      @csrf
      @method('POST')
      <div class="">
        <label for="title">Title: </label>
        <input type="text" name="title" value="{{$post->title}}">
      </div>
      <div class="">
        <label for="author">Author: </label>
        <input type="text" name="author" value="{{$post->author}}">
      </div>
      <div class="">
        <label for="description">Description: </label>
        <input type="text" name="description" value="{{$post->description}}">
      </div>
      <button type="submit" name="button">Modifica post</button>
    </form>
@endsection
