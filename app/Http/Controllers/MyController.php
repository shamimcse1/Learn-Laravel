<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    function MyName($name, $age,$gpa){

        //return "Name : ". $name . " <br> Age : ". $age . "  <br> GPA : ". $gpa;
        return view('demo_view',['nameKey'=>$name,'ageKey'=>$age, 'gpaKey'=>$gpa]);
    }
}
