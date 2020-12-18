<?php

namespace App\Http\Controllers;

use App\Models\reserva;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ReservaController extends Controller
{
    
    public function nuevo(){
        return view('reservas.nuevo');
    } 
    public function savereserve(Request $req){
        $save = new reserva();
        $save->nombrepersona=$req->nomcliente;
        $save->apellidopersona=$req->apecliente;
        $save->correo=$req->correo;
        $save->telefono=$req->ncelular;
        $save->fecha=$req->ftour;
        $save->nroadultos=$req->nadultos;
        $save->nroniños=$req->nniños;

        $save->save();

        return $this->lista();

    }
    public function lista(){
        return view('reservas.index', [
            'reserva' => reserva::paginate()
        ]);
        
    }
    public function delete(reserva $res){
        $res->delete();
        return $this->lista();

    }
    public function updatesave(Request $req){

        $update= reserva::find($req->id);
        
        $update->nombrepersona=$req->nomcliente;
        $update->apellidopersona=$req->apecliente;
        $update->correo=$req->correo;
        $update->telefono=$req->ncelular;
        $update->fecha=$req->ftour;
        $update->nroadultos=$req->nadultos;
        $update->nroniños=$req->nniños;
        $update->save();

        return $this->lista();

    }
    public function update($id){
        $res = $Paquete= reserva::find($id);
        return view('reservas.actualizar',compact('res'));
    }

}
