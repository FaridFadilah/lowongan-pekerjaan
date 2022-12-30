<?php

namespace App\Http\Livewire;

use App\Models\Kota;
use App\Models\Type;
use App\Models\Loker;
use Livewire\Component;
use App\Models\Category;

class Home extends Component{
    public $categoryName ;
    public function render(){
        $type = Type::all();
        $kota = Kota::all();
        $category = Category::all();
        $loker = Loker::all();
        return view('livewire.page.home', compact('loker','kota','category','type'));
    }
}