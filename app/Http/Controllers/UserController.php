<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    function getUser(){
        return "Uttam Pulami";
    }

    function getName($id,$name){
        return "My name is ".$name ." and my id is ".$id;
    }
}
