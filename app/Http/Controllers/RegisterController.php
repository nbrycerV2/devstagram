<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //
    public function index() 
    {
        return view('auth.register');
    }
    public function store(Request $request){
        //dd($request);
        //dd($request->get('name')); //verifico si llega la variaple por el ppost
        $this->validate($request,[
            'name' =>'required|min:5',
            
        ]);
    }

    
}
