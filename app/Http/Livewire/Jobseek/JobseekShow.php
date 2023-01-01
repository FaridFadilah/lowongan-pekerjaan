<?php

namespace App\Http\Livewire\Jobseek;

use App\Models\Loker;
use Livewire\Component;

class JobseekShow extends Component{
    public function render(){
        $explode = explode('/',request()->path());
        $end = end($explode);
        $loker = Loker::find($end)->first();
        return view('livewire.page.jobseek.show', compact('loker'));
    }
}
