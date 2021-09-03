<?php

namespace App\Http\Controllers\Frontend;

use App\Book;
use App\BorrowHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::paginate(10);

        return view('frontend.book.index', [
            'books' => $books
        ]);
    }

    public function show(Book $book)
    {
        return view('frontend.book.show', [
            'book' => $book
        ]);
    }
    public function borrow(Book $book)
    {
        $user = Auth::user();

        $user->borrow()->attach($book);

        return redirect()->back();
    }
}
