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
}