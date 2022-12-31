<?php

namespace App\Http\Livewire\Company;

use App\Models\Loker;
use App\Models\Company;
use Livewire\Component;
use Illuminate\Support\Str;

class CompanyShow extends Component{
    // public $company = Company::class;
    // public $getCompany;
    // public $no_telp;
    // public $kota;
    public $getId;

    public function mount(){
        // $this->company;
        // $this->getCompany = $this->company;
        // $this->no_telp = $this->company->find($this->getId)->user->no_telp;
        // $this->kota = $this->company->kota->name;
    }

    public function render(){
        $company = Company::where('id', $this->getId)->first();
        $loker = Loker::where('company_id', $this->getId)->get();
        // dd($company);
        // die;
        return view('livewire.page.company.show', compact('loker','company'));
    }
}