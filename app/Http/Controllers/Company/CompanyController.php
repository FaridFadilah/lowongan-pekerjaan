<?php

namespace App\Http\Controllers\Company;

use App\Models\Loker;
use App\Models\Company;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CompanyController extends Controller{
    public function index(){
        return response()->json([
            'data' => Company::all()
        ], 200);
    }

    public function show(){
        return response()->json([
            'data' => Company::first()
        ], 200);
    }

    public function store(Request $request){
        $getRequest = $request->all();
        if($request->hasFile('foto')){
            $imgFile = $request->file('foto');
            $imgName = time() . '-' . $imgFile->hashName();
            $imgFile->move('foto/', $imgName);
            $getRequest['foto'] = $imgName;
        } else{
            $imgName = "default.jpg";
        }

        Company::create();
        return response()->json([
            'data' => $request->all(),
        ], 200);
        // return redirect()->route('')->with('message', 'success');
    }

    public function storeLoker(Request $request){
        $request->validate([
            'kota_id' => ['required'],
            'company_id' => ['required'],
            'category_id' => ['required'],
            'type_id' => ['required'],
            'name' => ['required'],
            'deskripsi' => ['required'],
            'sallary' => ['required'],
            'kuota' => ['required'],
            'min_pengalaman' => ['required']
        ]);
        // dd($request->all());
        // die;
        Loker::create($request->all());
        return redirect()->route('company.dashboard')->with('message', 'create success');
    }
    // public function 
}