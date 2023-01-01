<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use App\Models\Company;
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
            'foto' => ['required', 'image'],
            'spesialis' => ['required'],
            'deskripsi' => ['required'],
            'gender' => ['required']
        ]);
        $getAll = $request->all();
        
        if($request->hasFile('foto')){
            $imgFile = $request->file('foto');
            $imgName = time() . '-' . $imgFile->hashName();
            $imgFile->move('img/', $imgName);
            $getAll['foto'] = $imgName;
        } else{
            $imgName = "profile.jpg";
        }

        User::create($getAll);
        return redirect()->route('auth.login')->with('message', 'Register success');
    }

    public function registerHrd(Request $request){
        $getAll = $request->all();
        $request->validate([
            'kota_id' => ['required'],
            'name' => ['required'],
            'email' => ['required', 'unique:users,email', 'email'],
            'password' => ['required'],
            'deskripsi' => ['required'],
            'deskripsi_company' => ['required'],
            'no_telp' => ['required'],
            'pendidikan_terakhir' => ['required'],
            'foto' => ['required', 'image'],
            'logo' => ['required', 'image'],
            'tanggal_lahir' => ['required'],
            'gender' => ['required']
        ]);

        if($request->hasFile('foto')){
            $imgFile = $request->file('foto');
            $imgName = time() . '-' . $imgFile->hashName();
            $imgFile->move('img/', $imgName);
            $getAll['foto'] = $imgName;
        } else{
            $imgName = "profile.jpg";
        }
        
        if($request->hasFile('logo')){
            $imgFile = $request->file('logo');
            $imgName = time() . '-' . $imgFile->hashName();
            $imgFile->move('img/', $imgName);
            $getAll['logo'] = $imgName;
        } else{
            $imgName = "company.jpeg";
        }

        // dd($getAll);
        // die;

        $createUser = User::create([
            'role_id' => 2,
            'kota_id' => $getAll['kota_id'],
            'name' => $getAll['name'],
            'email' => $getAll['email'],
            'password' => $getAll['password'],
            'no_telp' => $getAll['no_telp'],
            'deskripsi' => $getAll['deskripsi'],
            'spesialis' => 'Human Resource Development',
            'pendidikan_terakhir' => $getAll['pendidikan_terakhir'],
            'foto' => $getAll['foto'],
            'tanggal_lahir' => $getAll['tanggal_lahir'],
            'gender' => $getAll['gender']
        ]);

        $getLastId = $createUser->id;
        Company::create([
            'user_id' => $getLastId,
            'role_id' => 2,
            'kota_id' => $getAll['kota_id'],
            'name' => $getAll['name_company'],
            'url' => $getAll['url'],
            'jenis_usaha' => $getAll['jenis_usaha'],
            'size_karyawan' => $getAll['size_karyawan'],
            'deskripsi' => $getAll['deskripsi_company'],
            'logo' => $getAll['logo'],
        ]);
        return redirect()->route('auth.login')->with('message', 'Register success');
    }

    public function logout(){
        Auth::logout();
        session()->forget('logged_in');
        return redirect()->route('home')->with('message', 'Logged out success');
    }
}