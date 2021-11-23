<?php

namespace App\Http\Controllers;

use App\Models\Paybal;
use Illuminate\Http\Request;

class PaybalController extends Controller
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
    public function create(Request $request)
    {
       $paybal = new Paybal();
       $paybal->name = $request->name;
       $paybal->discord_id = $request->discord_id;
       $paybal->email_address = $request->email_address;
       $paybal->amount = $request->amount;
       $paybal->address = $request->address;
       $paybal->save();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paybal  $paybal
     * @return \Illuminate\Http\Response
     */
    public function show(Paybal $paybal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paybal  $paybal
     * @return \Illuminate\Http\Response
     */
    public function edit(Paybal $paybal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paybal  $paybal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paybal $paybal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paybal  $paybal
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paybal $paybal)
    {
        //
    }
}
