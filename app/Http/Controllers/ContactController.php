<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('contact');
    }

    public function submit(Request $request){
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        return view('contactout',[
            'message'=>$message,
            'email'=>$email,
            'name'=>$name
        ]);
    }
}