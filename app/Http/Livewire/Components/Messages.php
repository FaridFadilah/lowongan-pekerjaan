<?php

namespace App\Http\Livewire\Components;

use Livewire\Component;

class Messages extends Component{
    public $message;
    public function render(){
        return view('livewire.components.messages', [$this->message]);
    }
}
