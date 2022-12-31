<?php

namespace App\Http\Livewire\Jobseek;

use App\Models\Loker;
use Livewire\Component;

class JobseekShow extends Component{
    public $getId;
    public function render(){
        dd($this->getId);
        die;
        $loker = Loker::find($this->getId)->first();
        return view('livewire.page.jobseek.show', compact('loker'));
    }
}
