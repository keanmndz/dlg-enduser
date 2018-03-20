<?php

namespace DLG\Http\Controllers;

use Cart;
use Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use DLG\Customers;
use DLG\CustomersmerArchives;
use Carbon\Carbon;
use Alert;
use PDF;
use Redirect;
use DLG\Products;




class userController extends Controller
{
	
    //Show Cart in Menu

    public function show()
    {
        $prods = Products::all();

         if (Request::isMethod('post')) 
         {
        $product_id = Request::get('product_id');
        $product = Products::find($product_id);
        Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));
         }

        $cart = Cart::content();

        return view('order.menu',['prods' => $prods], array('cart' => $cart));
    }

    //Increment Cart in Menu

    public function increment()
    {
        $prods = Products::all();

         if (Request::isMethod('post')) 
         {
        $product_id = Request::get('product_id');
        $product = Products::find($product_id);
        Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));
         }

        //increment the quantity
        if (Request::get('product_id') && (Request::get('increment')) == 1) 
        {
            $item = Cart::search(function($key, $value) { return $key->id == Request::get('product_id'); })->first();
            Cart::update($item->rowId, $item->qty + 1);
        }


        //decrease the quantity
        if (Request::get('product_id') && (Request::get('decrease')) == 1) 
        {
            $item = Cart::search(function($key, $value) { return $key->id == Request::get('product_id'); })->first();
            Cart::update($item->rowId, $item->qty - 1);
        }

        $cart = Cart::content();

       return view('order.menu',['prods' => $prods], array('cart' => $cart));
    }

    //Show cart in checkout

     public function cart()
    {
        $prods = Products::all();

         if (Request::isMethod('post')) 
         {
        $product_id = Request::get('product_id');
        $product = Products::find($product_id);
        Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));
         }


    $cart = Cart::content();

    return view('order.checkout',['prods' => $prods], array('cart' => $cart));



    }

    //Remove item in cart

    public function remove()
    {
        $prods = Products::all();

         if (Request::isMethod('post')) 
         {
        $product_id = Request::get('product_id');
        $product = Products::find($product_id);
        Cart::add(array('id' => $product_id, 'name' => $product->name, 'qty' => 1, 'price' => $product->price));
         }

        if (Request::get('product_id'))
        {
            $item = Cart::search(function($key, $value) { return $key->id == Request::get('product_id'); })->first();
            Cart::remove($item->rowId);
        }

        $cart = Cart::content();

        return view('order.menu', ['prods' => $prods], array('cart' => $cart));

    }

    //Show Guest information 

    public function checkDetails()
    {
         $input = Input::only('name','email','password');            
        $user = new User;
        $user->name = $input['name'];
        $user->email = $input['email'];
        $user->password = Hash::make($input['password']);
        $user->save();
        return view ('order.confirm');

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
