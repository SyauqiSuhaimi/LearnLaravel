<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;

class ListController extends Controller
{
    //
    function index()
    {
        // return view('list');
        $data = Member::paginate(2);
        return view('list', ['members' => $data]);
    }

    function addData(Request $req)
    {
        $member = new Member;
        $member -> id = $req -> userId;
        $member -> username = $req -> userName;
        $member -> email = $req -> usermail;
        $member -> password = $req -> userpass;
        $member -> save();
        return redirect("add");
    }

    function deleteData($id)
    {
        $data = Member::find($id);
        $data -> delete();
        return redirect('list');
    }
}
