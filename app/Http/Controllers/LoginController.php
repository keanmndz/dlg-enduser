<?php

namespace DLG\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
    	if(Auth::attempt(['email'=>$request->email, 'password'=>$request->password]))
    	{
    		$user = Auth::user();

    		return redirect('account')->with('user', Auth::user());
    	}

    	else
    	{
    		return redirect('/')->withErrors('Access denied.');
    	}
    }
}
