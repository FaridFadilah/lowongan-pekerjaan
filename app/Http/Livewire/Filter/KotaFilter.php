<?php

namespace App\Http\Livewire\Filter;

use App\Models\Kota;
use App\Models\Type;
use App\Models\Loker;
use Livewire\Component;
use App\Models\Category;

class KotaFilter extends Component{
    public $getName;
    public function render(){
        $explode = explode('/',request()->path());
        $end = end($explode);
        $type = Type::all();
        $category = Category::all();
        $kota = Kota::all();
        $getCategory = Kota::where('name', $end)->first();
        $loker = Loker::where('kota_id', $getCategory->id)->get();
        return view('livewire.page.home', compact('type','kota','category','loker'));
    }
}