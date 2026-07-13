<?php

namespace App\Http\Controllers;
use App\Models\Student;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    function getStudent(){
        $data = new Student()->get();
        echo $data;
        return Student::all();
    }
    function queries(){
        $result = DB::table('student')->get();

        return $result;
    }
}
