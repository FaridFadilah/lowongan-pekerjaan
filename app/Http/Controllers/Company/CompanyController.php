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
    }

    public function storeLoker(Request $request){
        Loker::create();
        return response()->json([
            'data' => $request->all(),
        ], 200);
    }
}