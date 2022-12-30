<?php

namespace App\Http\Livewire\Company;

use Livewire\Component;

class Show extends Component{
    public $company;
    public $no_telp;
    public function mount(){
        $this->no_telp = $this->company->user->no_telp;
    }
    public function render(){
        return view('livewire.company.show', [$this->company, $this->no_telp]);
    }
}