<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    public function index($name)
    {
        $data = ['mr', 'ram', 'but'];
        return view("user", ['name' => $name], ['users' => $data]); 
    }
}
