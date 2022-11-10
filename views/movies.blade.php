@extends('headermovie')

@section('title', 'movies')

@section('content')
<style>
    h1 {text-align: center;}
    h3 {text-align: center;}
</style>
<title>Movies List</title>

    @foreach ($movie_data as $movies)

    <h1>{{$movies->title}}</h1>
    <div class="movies_img" style="text-align: center">
        <img src={{$movies->content_url}} alt="" width="300" height="400">
    </div>

    <br>
        <h3>{{$movies->text}}</h3>
    <br>

    @endforeach

@endsection
