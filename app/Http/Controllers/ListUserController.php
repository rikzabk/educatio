<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListUser;
use App\Models\Balance;
use App\Models\Transaction;

class ListUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $user = ListUser::all();
        return view('listUser', ['user' => $user]);
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
    public function update(Request $request, ListUser $listUser)
    {
        //
        // form validation
        $request->validate([
            'user_name'    => 'required',
            'user_phone'   => 'required|digits_between:10,13',
            'user_email'   => 'required|email:rfc,dns',
            'user_dob'     => 'required',
            'user_address' =>  'required',
        ]);

        ListUser::where('userid', $listUser->userid)
            ->update([
                'user_name' => $request->user_name,
                'user_email' => $request->user_email,
                'user_phone' => $request->user_phone,
                'user_dob' => $request->user_dob,
                'user_address' => $request->user_address,
            ]);
        return redirect('listUser')->with('status', 'Data Siswa Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListUser $listUser)
    {
        //
        if (Balance::where('userid', $listUser->userid)->first())
        {
            $balance = Balance::where('userid', $listUser->userid)->pluck('balanceid')->all();
            Balance::destroy($balance);
        }
        if (Transaction::where('userid', $listUser->userid)->first())
        {
            $transaction = Transaction::where('userid', $listUser->userid)->pluck('transactionid')->all();
            Transaction::destroy($transaction);
        }
        ListUser::destroy($listUser->userid);
        return redirect('listUser')->with('status', 'Data Siswa Berhasil Dihapus!');
    }
}
