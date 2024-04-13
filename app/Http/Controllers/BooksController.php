<?php

namespace App\Http\Controllers;
use App\Models\Book;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::all();
		// dd($books);
        return view('books.index', ['books' => $books]);
    }

	    public function search(Request $request)
    {
        $search = $request->input('search');
        
        // Query books with optional search filter
        $books = Book::where('title', 'LIKE', "%$search%")->get();
        
        return view('books.search', [
			'books' => $books,
			'search' => $search,
		]);	
    }
}
