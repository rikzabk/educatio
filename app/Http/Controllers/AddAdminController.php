<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Models\AddAdmin;

class AddAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('addAdmin');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        // return view('addAdmin');
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
        // form validation
        $request->validate([
            'admin_name' => 'required','regex:/^[a-zA-Z0-9\s]+$/',
            'admin_phone' => 'required|digits_between:10,13',
            'admin_email' => 'required|email:rfc,dns',
            'admin_password' => 'required|required_with:konfirmasi_password|same:konfirmasi_password',
            'konfirmasi_password' => 'required',
        ],[
            'admin_password.same' => 'The admin password and confirm password must match',
            'konfirmasi_password.required' => 'The confirm password field is required',
        ]);

        // create admin
        AddAdmin::create([
            'admin_name' => $request->admin_name,
            'admin_password' => Hash::make($request->admin_password),
            'admin_email' => $request->admin_email,
            'admin_address' => $request->admin_address,
            'admin_phone' => Str::of($request->admin_phone)->ltrim('0'),
        ]);

        return redirect('addAdmin')->with('status', 'Admin Berhasil Ditambahkan');
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
