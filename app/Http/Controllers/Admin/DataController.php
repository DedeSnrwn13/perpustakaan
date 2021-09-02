<?php

namespace App\Http\Controllers\Admin;

use App\Author;
use App\Book;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class DataController extends Controller
{
    public function authors()
    {
        $authors = Author::orderBy('name', 'asc');

        return DataTables::of($authors)
                        ->addColumn('action', 'admin.author.action')
                        ->addIndexColumn()
                        ->rawColumns(['action'])
                        ->toJson();
    }

    public function books()
    {
        $books = Book::orderBy('title', 'asc');

        return DataTables::of($books)
                        ->addColumn('author', function(Book $model) {
                            return $model->author->name;
                        })
                        ->addColumn('action', 'admin.book.action')
                        ->editColumn('cover', function(Book $model) {
                            return '<img src="'. $model->getCover() .'" height="150px">';
                        })
                        ->addIndexColumn()
                        ->rawColumns(['cover', 'action'])
                        ->toJson();
    }
}
