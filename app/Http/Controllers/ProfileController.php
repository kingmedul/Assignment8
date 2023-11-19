<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function index(Request $request, $id=null){
        $name="Donal Trump";
        $age="75";
        $data=["id"=>$id,"name"=>"$name","Age"=>"$age"];
        
        $name = "access_token";
        $value = "123-XYZ";
        $minute = 1;
        $path = "/";
        $domain = $_SERVER['SERVER_NAME'];
        $secure = false;
        $httponly = true;

        return response($data,200)->cookie($name,$value,$minute,$path,$domain,$secure,$httponly);
    }
   
}
