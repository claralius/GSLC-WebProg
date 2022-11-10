@extends('headerbooks')

@section('title', 'books')

@section('content')
<style>
    h1 {text-align: center;}
    h3 {text-align: center;}
</style>
<title>Books List</title>

    @foreach ($book_data as $books)

        <h1>{{$books->title}}</h1>
        <div class="images" style="text-align: center">
            <img src={{$books->content_url}} alt="" width="300" height="400">
        </div>

        <br>
           <h3>{{$books->text}}</h3>
        <br>

    @endforeach
@endsection
