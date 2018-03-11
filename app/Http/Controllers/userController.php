<?php

namespace DLG\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use DLG\Customers;
use DLG\CustomerArchives;
use Carbon\Carbon;
use Alert;
use PDF;
use Redirect;
use DLG\Products;




class userController extends Controller
{
	

    public function show()
    {
        $prods = Products::all();
        return view('order.menu', ['prods' => $prods]);
    }

    // User New Account Registration

    public function register()
    {
        return view('website.register')->with('user', Auth::user());
    }

    public function addCustomer(request $request)
    {

        $this->validate(request(), [

            'lname' => 'required|string',
            'fname' => 'required|string',
            'mname' => 'required|string',
            'email' => 'required|email|min:4|unique:customers',
            'password' => 'required|string|min:4',
            'company' => 'required|string',
            'address' => 'required',
            'contact' => 'required|digits:11'

        ]);

		$customers = new Customers();

    	$customers->lname=$request->input('lname');
    	$customers->fname=$request->input('fname');
        $customers->fname=$request->input('mname');
        $customers->email=$request->input('email');
        $customers->password=bcrypt($request->input('password'));
        $customers->company=$request->input('company');
    	$customers->address=$request->input('address');
    	$customers->contact=$request->input('contact');

    	$customers->save();

        return redirect('/customers')->with('success', 'New customer created!');
    }

}
