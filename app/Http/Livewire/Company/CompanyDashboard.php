<?php

namespace App\Http\Livewire\Company;

use App\Models\Company;
use Livewire\Component;

class CompanyDashboard extends Component{
    public $getId;
    public function render(){
        $company = Company::where('id', $this->getId)->get();
        return view('livewire.company.dashboard', compact('compact'));
    }
}
