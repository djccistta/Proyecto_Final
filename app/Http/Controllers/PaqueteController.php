<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\paquete;
use Illuminate\Support\Facades\Storage;

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
        $Paquete->save();
        return back()->with('Crear_Paquete','El paquete se creo correctamente');
    }
    public function ListaPaquete()
    {
        $Paquete= paquete::orderBy('nombre','ASC')->get();
        return view('Paquetes.index',compact('Paquete'));
    }
    public function ListaPaqueteInicio()
    {
        $Paquete= paquete::all();
        return view('Paquete',compact('Paquete'));
    }
    public function BorrarPaquete($id)
    {
       paquete::where('id',$id)->delete();
       return back()->with('Borra_Paquete','El Paquete fue borrado exitosamente'); 
    }
    Public function Actualizar1($id)
    {
        $Paquete= paquete::find($id);
        return view('Paquetes.actualizar',compact('Paquete'));
    }
    public function Actualizar2(Request $req)
    {
      /*  $Paquete= paquete::find($req->id);
        $Paquete->nombre=$req->nombre;
        $Paquete->categoria=$req->categoria;
        $Paquete->descripcion=$req->descripcion;
        $Paquete->precio=$req->precio;
        $Paquete->foto=$req->foto;
        if($req->hasFile('foto'))
        {
            $Paquete2= paquete::findOrFail($req->id);
            Storage::delete('public/imagenes/'.$Paquete2->foto);
            $Paquete['foto']=$req->file('foto')->store('imagenes','public');
        }    
        $Paquete->save();
*/
        
        $Paquete= paquete::find($req->id);
        $Paquete->nombre=$req->nombre;
        $Paquete->categoria=$req->categoria;
        $Paquete->descripcion=$req->descripcion;
        $Paquete->precio=$req->precio;
        if($req->hasFile('foto'))
        {
            Storage::delete('public/imagenes/'.$Paquete->foto);
            $Paquete->foto=$req->foto;
            $Paquete['foto']=$req->file('foto')->store('imagenes','public');
        }    
        $Paquete->save();
        return back()->with('Paquete_Actualizado','El Paquete fue actualizado correctamente'.$req->nombre."".$Paquete->nombre);
    }
 
}


 

