<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paquete;

class PaqueteController extends Controller
{
    
    public function nuevo()
    {
        return view('Paquetes.nuevo');
    }
    
    public function CrearPaquete(Request $req)
    {
        $Paquete= new paquete();
        $Paquete->nombre=$req->nombre;
        $Paquete->categoria=$req->categoria;
        $Paquete->descripcion=$req->descripcion;
        $Paquete->precio=$req->precio;
        $Paquete->foto=$req->foto;
        if($req->hasFile('foto'))
        {
            $Paquete['foto']=$req->file('foto')->store('imagenes','public');
        }
        if($req->hasFile('archivo'))
        {
            $Paquete['archivo']=$req->file('archivo')->store('Libros','public');
        }
        $Paquete->save();
        return back()->with('Crear_Paquete','El paquete se creo correctamente');
    }
 
}


 

