<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;
use App\Attribute;
use App\Cart;
use App\Shipping;
use Auth;

class OrderProcessPagesController extends Controller
{
    function checkout()
    {
        
        $user_id = Auth::id();

        $cartItems = Cart::where('user_id', $user_id)->get();
        return view('pages.checkout',[
            'user' => Auth::user(),
            'cartItems' => $cartItems
        ]);
    }


    function OrderPlacement(Request $req)
    {

        $this->validate($req,[
            'PaymentType' => 'required|string',
            
        ]);

        if($req->PaymentType == "cash")
        {
            // return $req->all();
            $shipping = new Shipping;

            $shipping->name = $req->name;
            $shipping->email = $req->email;
            $shipping->contact = $req->contact;
            $shipping->address = $req->address;
            $shipping->city = $req->city;
            $shipping->zipcode = $req->zipcode;
           
            $shipping->user_id = $req->user_id; 
            $shipping->grand_total = $req->grand_total;
            $shipping->company = $req->company;
            $shipping->country = $req->country;
            $shipping->order_note = $req->order_note;
            $shipping->payment_status = 0;


            

            $shipping->save();

            return back();
        }
        


        






    }
}
