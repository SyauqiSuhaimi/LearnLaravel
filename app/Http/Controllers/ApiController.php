<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\HTTP;

class ApiController extends Controller
{
    //
    function index()
    {
        $books = HTTP::get('https://jsonplaceholder.typicode.com/posts')->collect();
        return view('database',['books' => $books]);
        // return $books;
    }
}
