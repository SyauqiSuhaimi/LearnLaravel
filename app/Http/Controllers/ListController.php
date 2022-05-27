<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;

use Illuminate\Support\Facades\DB;

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

    function editData($id)
    {
        $data = Member::find($id);
        return view('updateMember', ['data' => $data]);
    }

    function updateData(Request $req)
    {
        // $data = Member::find($req -> id);
        // $data -> userId = $req -> id;
        // $data -> userName = $req -> username;
        // $data -> usermail = $req -> email;
        // $data -> userpass = $req -> password;

        $data = Member::find($req -> userId);
        $data -> id = $req -> userId;
        $data -> username = $req -> userName;
        $data -> email = $req -> usermail;
        $data -> password = $req -> userpass;
        $data -> save();
        return redirect('list');
    }

    function operation()
    {
        echo "operation";
    }
}
