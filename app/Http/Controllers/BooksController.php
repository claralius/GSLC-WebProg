<?php

namespace App\Http\Controllers;

use App\Models\Books;
use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index(){
        $book_data = Books::all();

        return view('books', compact('book_data'));
    }
}
