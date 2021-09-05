<?php

namespace App\Http\Controllers\Admin;

use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function topBook()
    {
        $books = Book::withCount('borrowed')
                    ->orderBy('borrowed_count', 'desc')
                    ->paginate(10);

        $books->load('author');

        return view('admin.report.top-book', [
            'books' => $books,
        ]);
    }
}
