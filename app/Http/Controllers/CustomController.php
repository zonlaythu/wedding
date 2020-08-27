<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Package;
use App\Order;
use Auth;

class CustomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    { 
      // dd($request);
        $cartArr = json_decode($request->shop_data);
        $total = 0;
        foreach ($cartArr as $row) {
            $total+= $row->price;
        }
        $package = new Package();
        $package->name = "Customer Created";
        $package->photo = "This is Customer Package Photo";
        $package->price = $total;
        $package->status = 1;
        $package->save();

        foreach ($cartArr as $row) {
            $package->services()->attach($row->id);
        }

        $order = new Order();
        $order->voucherno = uniqid();
        $order->orderdate = date('Y-m-d');
        // $order->status = 1;
        $order->note = $request->notes;
        $order->total = $total;
        $order->user_id = Auth::id();
        $order->package_id = $package->id;
        $order->save();

        return 'Successful';
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
