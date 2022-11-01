@extends('template')

@section('title', 'books')

@section('content')
<title>Books List</title>

    @foreach ($book_data as $books)

        <h1>{{$books->title}}</h1>
        <img src={{$books->content_url}} alt="">
        <br>
           <h2>{{$books->text}}</h2>
        <br>

    @endforeach
@endsection
