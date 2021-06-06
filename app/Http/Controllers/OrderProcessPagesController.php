<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Product;
use App\Attribute;
use App\Cart;
use App\Order;
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

            //putting all the Cart Items in the order table with Shipment ID and User Id and clearing the cart
            $user_id = Auth::id();
            $cartItems = Cart::where('user_id', $user_id)->get();

            foreach($cartItems as $key=>$data)
            {
                $order = new Order;
                $order->shipping_id = $shipping->id;
                $order->product_name = $data->product->product_title;
                $order->price = $data->price;
                $order->quantity = $data->quantity;
                $order->size = $data->size;
                $order->ram = $data->ram;
                $order->color = $data->color;

                $order->save(); 
                
                
                //deducting from the products-attribute quantity
                $attribute = Attribute::findOrFail($data->attribute_id);

                $cart_quantity = $data->quantity;
                $attribute_quantity = $attribute->quantity;

                $updated_quantity = $attribute_quantity - $cart_quantity;

                $attribute->quantity=$updated_quantity;
                $attribute->save();

                //deleteing from cart
                $cart_item = Cart::findOrFail($data->id);
                $cart_item->delete();




            }
            
            return back();
        }
        
    }




    function OrderTracker()
    {

        $user_id = Auth::id();

        $shippings = Shipping::where('user_id', $user_id)->get();
        return view('shipments', [
            'shippings'=> $shippings
        ]);

    }


    function ViewProducts($id)
    {
        $products = Order::where('shipping_id', $id)->get();

        return view('shipmentproduct', [
            'products'=> $products
        ]);
    }
}
