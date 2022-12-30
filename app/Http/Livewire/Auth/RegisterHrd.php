<?php
namespace App\Http\Livewire\Auth;

use App\Models\Kota;
use Livewire\Component;

class RegisterHrd extends Component{
    public function render(){
        $getKota = Kota::all();
        return view('livewire.page.auth.register-hrd', compact('getKota'));
    }
}