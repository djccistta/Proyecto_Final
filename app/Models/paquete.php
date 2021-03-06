<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class paquete extends Model
{
    protected $fillable = ['nombre','categoria','descripcion','precio','foto'];    
    
    
    
    public function scopename($query,$name){

        if($name)
        return $query->where('nombre','LIKE',"%$name%");
        
    }
}
