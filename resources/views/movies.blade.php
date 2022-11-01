@extends('template')

@section('title', 'movies')

@section('content')
<title>Movies List</title>

    @foreach ($movie_data as $movies)

    <h1>{{$movies->title}}</h1>
    <img src={{$movies->content_url}} alt="">
    <br>
        <h2>{{$movies->text}}</h2>
    <br>

    @endforeach

@endsection
