<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        $data = [
            'name'=> 'Jahid Rahman',
            'age' => '25',
            'city' => 'New York',
            'country' => 'USA',
        ];
        return $data;
    }

    public function store(Request $request){
        return $request->all();
    }

    public function new(){
        return 'hello';
    }
}
