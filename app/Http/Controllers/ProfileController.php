<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileController extends Controller
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Profile $profile)
    {
        //
        $user = auth()->user();
        return view('profile', ['user' => $user]);
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
    public function update(Request $request, Profile $profile)
    {
        //
        // form validation
        $request->validate([
            'user_name'    => 'required','regex:/^[a-zA-Z0-9\s]+$/',
            'user_phone'   => 'required|digits_between:10,13',
            'user_email'   => 'required|email:rfc,dns',
            'user_dob'     => 'required',
            'user_address' =>  'required',
        ]);

        Profile::where('userid', $profile->userid)
        ->update([
            'user_name' => $request->user_name,
            'user_email' => $request->user_email,
            'user_phone' => $request->user_phone,
            'user_dob' => $request->user_dob,
            'user_address' => $request->user_address,
        ]);
        return redirect('profile')->with('status', 'Profil berhasil diubah!');
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
