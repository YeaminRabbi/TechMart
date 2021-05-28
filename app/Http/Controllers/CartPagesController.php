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
            'carts' => Cart::where('user_id', $user_id)->get(),
            'grand_total' => 0
        ]);
    }



    function SingleItemCartDelete($id)
    {
        $cartItem = Cart::find($id);
        $cartItem->delete();
        return back();
    }



    public function CartUpdate(Request $req)
    {

        $allCartItemsID =$req->cart_id;

        
      
        foreach($allCartItemsID as $key=> $data)
        {
            $cart=Cart::findOrFail($data);

            $cart->quantity = $req->quantity[$key];
            $cart->save();
        }

        return back();
    }




    function QuantityUpdate(Request $request){
        $id = $request->id;
        $qty = $request->qty_quantity;
       
        $cart = Cart::where('id',$id);
        $cart->quantity = $qty;


        $total = $qty*$cart->price;

        $cart->save();
        return response()->json($total);
    }

}
