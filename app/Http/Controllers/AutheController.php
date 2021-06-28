<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth; 

use App\Models\Registration;
use App\Models\AddAdmin;
use App\Models\ListUser;
use App\Models\Balance;

class AutheController extends Controller
{
    public function getLogin()
    {
        // cek auth
        if (auth()->guard('admin')->check()) {
            return redirect()->back();
        } else {
            if (auth()->guard('user')->check()) {
                return redirect()->back();
            }
            return view('login');
        }
    }
    
    public function postLogin(Request $request)
    {
        // form validation
        $request->validate([
            'user_email' => 'required|email:rfc,dns',
            'user_password' => 'required',
        ]);

        if (!auth()->attempt(['user_email' => $request->user_email, 'admin_password' => $request->user_password])) {
            if (!auth()->guard('admin')->attempt(['admin_email' => $request->user_email, 'admin_password' => $request->user_password])) {
                return redirect()->back();
            } else {
                return redirect()->route('listAdmin');
            }
        }
        return redirect()->route('home');
    }
    
    public function getRegistration()
    {
        // cek auth
        if (auth()->guard('admin')->check()) {
            return redirect()->back();
        } else {
            if (auth()->guard('user')->check()) {
                return redirect()->back();
            }
            return view('registration');
        }
    }
    
    public function postRegistration(Request $request)
    {
        // form validation
        $request->validate([
            'user_name'             => 'required','regex:/^[a-zA-Z0-9\s]+$/',
            'user_phone'            => 'required|digits_between:10,13',
            'user_email'            => 'required|email:rfc,dns|unique:App\Models\ListUser,user_email',
            'user_password'         => 'required|required_with:konfirmasi_password|same:konfirmasi_password',
            'konfirmasi_password'   => 'required',
        ],[
            'user_password.same' => 'The user password and confirm password must match',
            'konfirmasi_password.required' => 'The confirm password field is required',
        ]);

        // create user
        $registration = Registration::create([
            'user_name'     => $request->user_name,
            'user_password' => Hash::make($request->user_password),
            'user_email'    => $request->user_email,
            'user_phone'    => Str::of($request->user_phone)->ltrim('0'),
        ]);

        Balance::create([
            'balance'   => '0',
            'userid'    => $registration->userid,
        ]);

        // auto login setelah register
        auth()->loginUsingId($registration->userid);

        return redirect()->route('home');
    }
    public function logout()
    {
        auth()->logout();
        return redirect()->route('login');
    }
}
