<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\ProfileAdmin;

class ProfileAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('profileAdmin');
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
    public function show(ProfileAdmin $profileAdmin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(ProfileAdmin $profileAdmin)
    {
        //
        $admin = auth()->guard('admin')->user();
        return view('profileAdmin', ['admin' => $admin]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProfileAdmin $profileAdmin)
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

        ProfileAdmin::where('adminid', $profileAdmin->adminid)
            ->update([
                'admin_name' => $request->admin_name,
                'admin_email' => $request->admin_email,
                'admin_phone' => $request->admin_phone,
                'admin_dob' => $request->admin_dob,
                'admin_address' => $request->admin_address,
        ]);
        return redirect('profileAdmin')->with('status', 'Profil berhasil diubah!');
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
