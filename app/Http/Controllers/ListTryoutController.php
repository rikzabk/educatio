<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ListTryout;

class ListTryoutController extends Controller
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
        return view('listTryout', compact('tryout'));
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
    public function update(Request $request, ListTryout $listTryout)
    {
        //
        // form validation
        $request->validate([
            'tryout_name'    => 'required','regex:/^[a-zA-Z0-9\s]+$/',
            'tryout_desc'     => 'required',
            'tryout_price' =>  'required',
        ]);

        ListTryout::where('tryoutid', $listTryout->tryoutid)
            ->update([
                'tryout_name' => $request->tryout_name,
                'tryout_desc' => $request->tryout_desc,
                'tryout_price' => $request->tryout_price,
            ]);
        return redirect('listTryout')->with('status', 'Data tryout berhasil diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListTryout $listTryout)
    {
        //
        ListTryout::destroy($listTryout->tryoutid);
        return redirect('listTryout')->with('status', 'Data tryout berhasil dihapus!');
    }
}
