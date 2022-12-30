<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class CardsCompany extends Component{
    public $company;
    public $kota;
    public $count;
    public function mount(){
        $this->kota = $this->company->kota->name;
        $this->count = $this->company->loker->count();
    }
    public function render(){
        return view('livewire.components.cards-company', [$this->count,$this->company, $this->kota]);
    }
}
