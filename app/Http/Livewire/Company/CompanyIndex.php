<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;

class CompanyIndex extends Component{
    public function render(){
        $company = Company::all();
        return view('livewire.page.company.index', compact('company'));
    }
}