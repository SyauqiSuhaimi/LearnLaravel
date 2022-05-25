<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormControl extends Controller
{
    //

    function getData(Request $req)
    {
        $req -> validate([
            'usermail' => 'required',
            'userpass' => 'required'
        ]);
        return $req -> input();
    }
}
