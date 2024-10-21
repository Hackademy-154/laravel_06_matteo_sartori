<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\BookModel;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function bookCreate(){
        return view("book");
    }
    public function bookindex(){
        $books = Book::all();

        return view("allBooks",compact('books'));
    }
    public function bookStore(Request $request){
        $books = Book::create([
            'title' => $request->title,
            'plot' => $request->plot,
            'pages' => $request->pages
        ]);
        
       
        return redirect(route('index'))->with('success','Libro aggiunto correttamente');
    }
}
