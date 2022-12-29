<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kota extends Model{
    use HasFactory;

    protected $guarded = ['id'];
    public function user(){
        return $this->hasMany(User::class);
    }

    public function company(){
        return $this->hasMany(Company::class);
    }

    public function loker(){
        return $this->hasMany(Loker::class);
    }
}