<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Cards extends Component{
    public $loker;
    public $company;
    public $category;
    public $kota;
    public $type;
    public function mount(){
        $this->category = $this->loker->category->name;
        $this->company = $this->loker->company;
        $this->kota = $this->loker->kota->name;
        $this->type = $this->loker->type->name;
    }

    public function render(){
        return view('livewire.components.cards', [$this->loker, $this->company, $this->category, $this->kota, $this->type]);
    }
}