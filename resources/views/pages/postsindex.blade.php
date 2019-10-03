@extends('layout.base')

@section('content')
  @foreach ($posts as $key => $value)
    <div class="the-post">
      <h2>{{$value-> title}}</h2>
      <h3>{{$value->author}}</h3>
      <p>{{$value->description}}</p>
    </div>
    <hr>
  @endforeach
@endsection
