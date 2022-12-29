<?php

namespace App\Http\Controllers\Jobseek;

use App\Models\Type;
use App\Models\Loker;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Category;

class JobseekController extends Controller{
    public function index(){
        return response()->json([
            'Data' => Loker::all()
        ],200);
    }
    public function jobsByCategory(Category $category){
        return response()->json([
            'Data' => $category->loker
        ],200);
    }
}