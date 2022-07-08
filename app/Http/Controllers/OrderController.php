<?php

namespace App\Http\Controllers;

use App\Mail\OrderMail;
use App\Models\Destination;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(Auth::user()->role_as === 'user') {
            $total_price = $request->current_price * $request->total_ticket;

            $order = new Order([
                "destination_id" => $request->destination_id,
                "name" => Auth::user()->username,
                "email" => Auth::user()->email,
                "current_price" => $request->current_price,
                "total_price" => $total_price,
                "total_ticket" => $request->total_ticket,
            ]);

            $order->save();

            return back()->with('success', 'Order placed successfully');
        } else {
            return back()->with('failed', "Admin is unable to purchase tickets to the destination");
        }
    }
}
