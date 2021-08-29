<?php

namespace App\Http\Controllers\Admin;

use App\Author;
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
                        ->toJson();
    }
}
