@extends('layout.base')

@section('content')
  <a href="{{route('posts.name')}}">INDIETRO</a>
  <h1>Crea Nuovo Post</h1>
    <form  action="{{route('posts.store')}}" method="post">
      @csrf
      @method('POST')
      <div class="">
        <label for="title">Title: </label>
        <input type="text" name="title" value="">
      </div>
      <div class="">
        <label for="author">Author: </label>
        <input type="text" name="author" value="">
      </div>
      <div class="">
        <label for="description">Description: </label>
        <input type="text" name="description" value="Et id enim odio et cumque consequatur odio.">
      </div>
      <button type="submit" name="button">Aggiungi post</button>
    </form>
@endsection
