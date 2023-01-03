<?php

namespace App\Http\Livewire\Company;

use App\Models\Kota;
use App\Models\Type;
use App\Models\Apply;
use App\Models\Company;
use Livewire\Component;
use App\Models\Category;
use App\Models\Loker;

class CompanyDashboard extends Component{
    public $getId;
    public function render(){
        $kota = Kota::all();
        $category = Category::all();
        $type = Type::all();
        $loker = Loker::all();
        // dd($company);
        // die;
        return view('livewire.page.company.dashboard', compact('category','type', 'kota'));
    }
}