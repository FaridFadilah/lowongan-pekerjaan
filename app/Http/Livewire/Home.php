<?php

namespace App\Http\Livewire;

use App\Models\Type;
use Livewire\Component;

class Home extends Component{
    public function render(){
        $type = Type::all();
        return view('livewire.page.home', compact('type'));
    }
}