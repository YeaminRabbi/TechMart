<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Carbon\Carbon;
use App\Product;
use App\Attribute;
use App\Cart;
use Auth;
class CartPagesController extends Controller
{
    function ShowCart()
    {

        $user_id = Auth::id();

        return view('pages.cart',[
            'cart' => Cart::where('user_id', $user_id)->get(),
            'grand_total' => 0
        ]);
    }
}
