<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;
use App\Models\Balance;

class BalanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = auth()->user();
        $balance = Balance::all();
        if (Balance::where('userid', Auth::id('userid'))->first()) {
            $balanceUser = Balance::where('userid', Auth::id('userid'))->first();
        } else {
            $balanceUser = 0;
        }
        return view('balance', compact('user', 'balance', 'balanceUser'));
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
        //
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
    public function update(Request $request, Balance $balance)
    {
        //
        // form validation
        $request->validate([
            'balance'   => 'required|numeric',
        ]);

        // balance validation
        $curr = Balance::where('userid', Auth::id('userid'))->first();
        $topup = $curr->balance+$request->balance;

        Balance::where('userid', Auth::id('userid'))
        ->update([
            'balance' => $topup,
        ]);
        return redirect('balance')->with('status', 'Isi saldo berhasil!');
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
