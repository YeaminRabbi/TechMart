<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Shipping;
class HomeController extends Controller
{
    //



    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    // public function index()
    // {
    //     return view('home');
    // }


    public function dashboard()
    {
        return view('pages.dashboard');
    }


    
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }


    function ShowPendingList()
    {
        $shippings = Shipping::where('status', 0)->get();
        $orders = Order::all();

        return view('pages.order.pending', [
            'shippings'=> $shippings,
            'orders' => $orders
        ]);
    }


    function OrderApproveStatus($id)
    {
        $shipping = Shipping::where('id', $id)->first();

        $shipping->status = 1;
        $shipping->save();

        return back();
    }


    function OrderProcessingList()
    {
        $shippings = Shipping::where('status', 1)->get();
        $orders = Order::all();

        return view('pages.order.process', [
            'shippings'=> $shippings,
            'orders' => $orders
        ]);
    }


    function OrderCompleteStatus($id)
    {
        $shipping = Shipping::where('id', $id)->first();

        $shipping->status = 2;
        $shipping->payment_status = 1;
        $shipping->save();

        return back();
    }

    function OrderCompleteList()
    {
        $shippings = Shipping::where('status', 2)->get();
        $orders = Order::all();

        return view('pages.order.complete', [
            'shippings'=> $shippings,
            'orders' => $orders
        ]);
    }

    function OrderProductList($id)
    {   
        $products = Order::where('shipping_id', $id)->get();
        return view('pages.order.productlist', [
            'products' => $products
        ]);
    }
    
}
