<?php

namespace App\Http\Controllers\Jobseek;

use App\Models\Kota;
use App\Models\Type;
use App\Models\Apply;
use App\Models\Loker;
use App\Models\Company;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JobseekController extends Controller{
    public function index(){
        return response()->json([
            'Data' => Loker::all()
        ],200);
    }
    
    public function show(Loker $loker){
        return response()->json([
            'data' => $loker->first()
        ], 200);
    }

    public function jobsByCategory(Category $category){
        return response()->json([
            'Data' => $category->loker
        ],200);
    }
    
    public function jobsByType(Type $type){
        return response()->json([
            'data' => $type->loker
        ], 200);
    }

    public function jobsByCompany(Company $company){
        return response()->json([
            'data' => $company->loker
        ], 200);
    }

    public function jobsByKota(Kota $kota){
        return response()->json([
            'data' => $kota->loker
        ], 200);
    }
    
    public function apply(Request $request){
        $request->validate([    
            'user_id' => ['required'],
            'cv_id' => ['required'],
            'loker_id' => ['required'],
            'deskripsi' => ['required'],
        ]);
        // dd($request->all());
        // die;
        Apply::create($request->all());
        return response()->json([
            'data' => $request->all()
        ], 200);
    }
}