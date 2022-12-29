<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model{
    use HasFactory;
    
    protected $guarded = ['id'];
    public function user(){
        return $this->hasOne(User::class);
    }
    public function loker(){
        return $this->hasMany(loker::class);
    }
}