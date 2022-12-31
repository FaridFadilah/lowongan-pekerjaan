<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller{
    public function login(Request $request){
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
        $request->validate([
            'name' => ['required'],
            'email' => ['required', 'unique:users,email', 'email'],
            'password' => ['required'],
            'no_telp' => ['required'],
            'pendidikan_terakhir' => ['required'],
            'tanggal_lahir' => ['required'],
            'spesialis' => ['required'],
            'deskripsi' => ['required'],
            'gender' => ['required']
        ]);

        User::create($request->all());
        return redirect()->route('auth.login')->with('message', 'Register success');
    }

    public function registerHrd(Request $request){
        $getAll = $request->all();
        $request->validate([
            'name' => ['required'],
            'name-hrd' => ['required'],
            'email' => ['required', 'unique:users,email', 'email'],
            'password' => ['required'],
            'deskripsi' => ['required'],
            'deskripsi-company' => ['required'],
            'no_telp' => ['required'],
            'pendidikan_terakhir' => ['required'],
            'tanggal_lahir' => ['required'],
            'gender' => ['required']
        ]);

        // dd($getAll);
        // die;
        if($request->hasFile('img')){
            $imgFile = $request->file('img');
            $imgName = time() . '-' . $imgFile->hashName();
            $imgFile->move('img/', $imgName);
        } else{
            $imgName = "default.jpg";
        }
        
        if($request->hasFile('foto_company')){
            $imgFile = $request->file('foto_company');
            $imgName = time() . '-' . $imgFile->hashName();
            $imgFile->move('img/', $imgName);
        } else{
            $imgName = "default.jpg";
        }

        $createUser = User::create([
            'name' => $getAll['name'],
            'email' => $getAll['email'],
            'password' => $getAll['password'],
            'no_telp' => $getAll['no_telp'],
            'deskripsi' => $getAll['deskripsi'],
            'spesialis' => 'Human Resource Development',
            'pendidikan_terakhir' => $getAll['pendidikan_terakhir'],
            'foto' => $getAll['foto_user'],
            'tanggal_lahir' => $getAll['tanggal_lahir'],
            'gender' => $getAll['gender']
        ]);
        $getLastId = $createUser->id;
        Company::create([
            'user_id' => $getLastId,
            'role_id' => 2,
            'name' => $getAll['name_company'],
            'url' => $getAll['url'],
            'jenis_usaha' => $getAll['jenis_usaha'],
            'kota_id' => $getAll['Kota'],
            'size_karyawan' => $getAll['size_karyawan'],
            'deskripsi' => $getAll['deskripsi_company'],
            'foto' => $getAll['foto_company'],
        ]);
        return redirect()->route('auth.login')->with('message', 'Register success');
    }

    public function logout(){
        Auth::logout();
        session()->forget('logged_in');
        return redirect()->route('home')->with('message', 'Logged out success');
    }
}