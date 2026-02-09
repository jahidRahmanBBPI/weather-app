<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test($id){
        // return view('Test',[
        //     'user_id'=>$id,
        // ]);
        $data = ' My details';
        return view('Test', compact('id', 'data'));
    }
}
