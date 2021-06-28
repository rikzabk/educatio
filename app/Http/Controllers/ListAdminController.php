<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\ListAdmin;

class ListAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $admin = ListAdmin::all();
        return view('listAdmin', compact('admin'));
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
    public function edit(ListAdmin $listAdmin)
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
    public function update(Request $request, ListAdmin $listAdmin)
    {
        //
        // form validation
        $request->validate([
            'admin_name'    => 'required','regex:/^[a-zA-Z0-9\s]+$/',
            'admin_phone'   => 'required|digits_between:10,13',
            'admin_email'   => 'required|email:rfc,dns',
            'admin_dob'     => 'required',
            'admin_address' =>  'required',
        ]);
  
        ListAdmin::where('adminid', $listAdmin->adminid)
            ->update([
                'admin_name' => $request->admin_name,
                'admin_email' => $request->admin_email,
                'admin_phone' => $request->admin_phone,
                'admin_dob' => $request->admin_dob,
                'admin_address' => $request->admin_address,
            ]);
        return redirect('listAdmin')->with('status', 'Data Admin Berhasil Diubah!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ListAdmin $listAdmin)
    {
        //
        ListAdmin::destroy($listAdmin->adminid);
        return redirect('listAdmin')->with('status', 'Data Admin Berhasil Dihapus!');
    }
}
