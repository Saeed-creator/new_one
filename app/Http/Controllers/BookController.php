<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BookController extends Controller
{
   /**
     * Display a listing of the books.
     */
    public function index()
    {
        // Retrieve all books
        $books = Book::all();

        return $books;
    }

    /**
     * Display the specified book.
     */
    public function show($id)
    {
        // Retrieve a single book by its ID
        $book = Book::find($id);

        // Check if the book exists
        if (!$book) {
            return ['error' => 'Book not found'];
        }

        return $book;
    }
}
