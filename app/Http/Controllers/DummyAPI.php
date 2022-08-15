<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Member;

use Validator;

class DummyAPI extends Controller
{
    //

    function getData()
    {
        return["name" => "Bob"];
    }

    function getDB()
    {
        // return view('list');
        $data = Member::all();
        return ['members' => $data];
    }

    function addData(Request $req)
    {
        $member = new Member;
        $member -> id = $req -> id;
        $member -> username = $req -> username;
        $member -> email = $req -> email;
        $member -> password = $req -> password;
        $result = $member -> save();
        
        if($result)
        {
            return["Result" => "Data has been saved"];
        }
        else
        {
            return["Result" => "Error"];
        }
        
    }

    function updateData(Request $req)
    {
        $member = Member::find($req -> id);
        $member -> id = $req -> id;
        $member -> username = $req -> username;
        $member -> email = $req -> email;
        $member -> password = $req -> password;
        $result = $member -> save();
        
        if($result)
        {
            return["Result" => "Data updated"];
        }
        else
        {
            return["Result" => "Error"];
        }
    }

    function deleteData($id)
    {
        $data = Member::find($id);
        $result = $data -> delete();
        
        if($result)
        {
            return["Result" => "Data deleted"];
        }
        else
        {
            return["Result" => "Error"];
        }
    }

    function search($name)
    {
        return Member::where("username", $name) -> get();
    }

    function testValid(Request $req)
    {
        $rules = array(
            "id" => "required",
            "username" => "required",
            "email" => "required",
            "password" => "required|min:2|max:5",
        );
        
        $validator = Validator::make($req->all(), $rules);

        if($validator->fails())
        {
            return $validator->errors();
        }
        else
        {
            $member = new Member;
            $member -> id = $req -> id;
            $member -> username = $req -> username;
            $member -> email = $req -> email;
            $member -> password = $req -> password;
            $result = $member -> save();
            
            if($result)
            {
                return["Result" => "Data has been saved"];
            }
            else
            {
                return["Result" => "Error"];
            }
        }
    }
}
