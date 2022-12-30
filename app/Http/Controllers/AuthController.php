<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
    public function login(Request $request){
        if($request->method() == 'GET') return view('livewire.page.auth.login');
        $validate = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        if(Auth::attempt($validate)){
            $request->session()->regenerate();
            session()->put('logged_in', uniqid());
            return redirect()->intended('/')->with('message', 'Logged in success');
        }
        return redirect()->route('auth.login')->withErrors(['message', 'something went wrong']);
    }

    public function register(Request $request){
        if($request->method() == 'GET') return view('livewire.page.auth.register');
        // dd($request->all());
        // die;
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users,email', 'email'],
            'password' => ['required'],
            'no_telp' => ['required'],
            'pendidikan_terakhir' => ['required'],
            'tanggal_lahir' => ['required'],
            'gender' => ['required']
        ]);
        User::create($request->all());
        // return response()->json([
        //     'message' => 'Data telah ditambahkan',
        //     'data' => $request->all()
        // ], 200);
        return redirect()->route('auth.login')->with('message', 'Register success');
    }

    public function logout(){
        Auth::logout();
        session()->forget('logged_in');
        return redirect()->route('home')->with('message', 'Logged out success');
    }
}