<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OstadController extends Controller
{
    function sayHi(){
        return "Welcome to Ostad";
    }

    function greet($name = "world"){
        return "Hello $name";
    }

    function samplePostRequest(Request $request){
        // return $request->all();
        return $request->input("person");
    }

    function sampleGetRequest(Request $request){
        return "<form method='POST' action ='/form'>
        <input type='text' name='person' placeholder='Enter your name'>
        <input type ='submit' value='submit'>
        </form>";
    }

    function testParmeters(Request $request){
        return "Param ". $request->input("person");
    }
}
