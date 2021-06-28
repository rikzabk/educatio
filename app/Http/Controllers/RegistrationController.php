<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;  

use App\Models\Registration;
use App\Models\Balance;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if (auth()->guard('admin')->check()) {
            return redirect()->back();
        } else {
            if (auth()->check()) { // true sekalian session field di user
                // login sukses
                return redirect()->back();
            }
            return view('registration');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $request = $request->validate([
        //     'user_name' => 'required',
        //     'user_email' => 'required|email:rfc,dns',
        //     'user_password' => 'required',
        //     'user_phone' => 'required|between:9,13',
        // ]);
        //
        if ($request->user_password!=$request->konfirmasi_password) {
            return redirect('registration')->with('status', 'Konfirmasi Password Salah!');
        }
        $hashed = Hash::make($request->user_password, ['rounds' => 12]);
        // echo $hashed;
        // echo (Hash::make('asd', ['rounds' => 12]));
        
        
        $registration = new Registration;
        // $registration->user_name = $request->user_name;
        // $registration->user_password = $request->user_password;
        // $registration->user_email = $request->user_email;
        $phone = $request->user_phone;
        $phone_trimmed = Str::of($phone)->ltrim('0');
        // $registration->user_phone = $phone_trimmed;
        
        // $registration->save();

        Registration::create([
            'user_name' => $request->user_name,
            'user_password' => $hashed,
            'user_email' => $request->user_email,
            'user_phone' => $phone_trimmed,
        ]);


        return redirect('home');
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
