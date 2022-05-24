<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function viewLoad()
    {
        $data = ['mr', 'ram', 'but'];
        return view("about", ['users' => $data]); 
    }
}
