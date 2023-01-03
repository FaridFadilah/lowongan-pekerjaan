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
use App\Models\Cv;
use Illuminate\Support\Facades\File;

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
    public function downloadCv($id){
        return response()->download(public_path() . '/cv/' . Cv::where('id', $id)->first()->name_file );
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
        return redirect()->route('home')->with('message', 'Apply sudah dikirim');
    }
    
    public function storeCv(Request $request){
        $request->validate([
            'user_id' => ['required'],
            'name_file' => ['required']
        ]);
        $getAll = $request->all();
        if($request->hasFile('name_file')){
            $imgFile = $request->file('name_file');
            $imgName = $imgFile->hashName();
            $imgFile->move('cv/', $imgName);
            $getAll['name_file'] = $imgName;
        } else{
            $imgName = "cv.png";
        }

        Cv::create($getAll);
        return redirect()->route('jobs.dashboard')->with('message', 'CV sudah ditambahkan');
    }
    public function updateCv(Request $request){
        $request->validate([
            'user_id' => ['required'],
            'name_file' => ['required']
        ]);
        $getAll = $request->except(['_token', '_method']);
        $getData = Cv::where('user_id', $request->user_id)->first();

        if(file_exists(public_path() . '/cv/' . $getData->first()->name_file)){
            unlink(public_path() . '/cv/' . $getData->first()->name_file);
        }

        if($request->hasFile('name_file')){
            $imgFile = $request->file('name_file');
            $imgName = $imgFile->hashName();
            $imgFile->move('cv/', $imgName);
            $getAll['name_file'] = $imgName;
        } else{
            $imgName = "cv.pdf";
        }
        $getData->update($getAll);
        return redirect()->route('jobs.dashboard')->with('message', 'Update Success');
    }
    public function deleteCv($id){
        $getData = Cv::where('id', $id);

        if(file_exists(public_path() . '/cv/' . $getData->first()->name_file)){
            unlink(public_path() . '/cv/' . $getData->first()->name_file);
        }
        $getData->delete();
        return redirect()->route('jobs.dashboard')->with('message', 'Deleted success');
    }
}