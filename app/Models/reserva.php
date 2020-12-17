<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reserva extends Model
{
    protected $fillable = ['nombrepersona','apellidopersona','telefono','correo','nroadultos','nrommiños','fecha','total'];
   
}
