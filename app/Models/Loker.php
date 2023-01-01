<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loker extends Model{
    use HasFactory;

    protected $guarded = ['id'];
    public function company(){
        return $this->belongsTo(Company::class);
    }

    public function apply(){
        return $this->hasMany(Apply::class);
    }
    
    public function type(){
        return $this->belongsTo(Type::class);
    }

    public function kota(){
        return $this->belongsTo(Kota::class);
    }
    
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
