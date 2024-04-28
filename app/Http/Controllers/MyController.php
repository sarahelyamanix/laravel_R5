<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function My_data(){
        return view('form1');
    }
    // public function Submit(Request $request){
    //     echo "<pre>";
    //     print_r($request->all());
    // }
    public function Submit(Request $request){
        $firstName = $request->input('fname');
        $lastName = $request->input('lname');
    
        echo 'First Name: ' . $firstName . '<br>';
        echo 'Last Name: ' . $lastName . '<br>';
    }
    
}
