<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; 
use App\Models\ListTryout;
use App\Models\Balance;
use App\Models\Transaction;

class PembayaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tryout = ListTryout::all();
        return view('pembayaran', compact('tryout'));
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
    public function store(Request $request, Transaction $transaction)
    {
        //
        Balance::where('userid', Auth::id('userid'))
        ->update([
            'balance' => $request->balance,
        ]);
        
        Transaction::create([
            'transaction_date' => now(),
            'tryoutid'          => $request->tryoutid,
            'userid'            => Auth::id('userid'),
        ]);
        
        return redirect('riwayatPembelian')->with('status', 'Pembelian berhasil!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
        $tryout = ListTryout::find($request->tryoutid);
        $balance = Balance::where('userid', Auth::id('userid'))->first();
        $balanceRemain = $balance->balance - $tryout->tryout_price;
        return view('pembayaran', compact('tryout', 'balance', 'balanceRemain'));
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
