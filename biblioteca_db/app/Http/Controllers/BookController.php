<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function create(Request $request){
        $newBookData = json_decode($request->getContent());
        $newBook = new Book();
        $newBook->title = $newBookData->title;
        $newBook->author = $newBookData->author;
        $newBook->ISBN = $newBookData->ISBN;
        $newBook->poster = $newBookData->poster;
        $newBook->genre = $newBookData->genre;
        $newBook->valutation = $newBookData->valutation;
        
        $newBook->save();
        return $newBook;
    }
    public function list(){
        $allBook = new Book();
        return $allBook->all();
    }

    public function detail($id){
        $book = Book::find($id);
        return $book;
    }

    public function edit($id){
        $book = Book::find($id);
        $newBook = new Book();
        $newBook->title = $book->title;
        $newBook->author = $book->author;
        $newBook->ISBN = $book->ISBN;
        $newBook->poster = $book->poster;
        $newBook->genre = $book->genre;
        $newBook->valutation = $book->valutation;

        $newBook->save();
        return $newBook;
    }
}