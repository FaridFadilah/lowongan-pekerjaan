<?php

namespace App\Http\Livewire\Filter;

use App\Models\Kota;
use App\Models\Type;
use App\Models\Loker;
use Livewire\Component;
use App\Models\Category;

class CategoryFilter extends Component{
    public $getName;
    public function render(){
        $explode = explode('/',request()->path());
        $end = end($explode);
        $type = Type::all();
        $category = Category::all();
        // dd($category);
        // die();
        $kota = Kota::all();
        $getCategory = Category::where('name', $end)->first();
        $loker = Loker::where('category_id', $getCategory->id)->get();
        return view('livewire.page.home', compact('type','kota','category','loker'));
    }
}