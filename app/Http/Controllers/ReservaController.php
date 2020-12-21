<?php

namespace App\Http\Controllers;

use App\Models\paquete;
use App\Models\reserva;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ReservaController extends Controller
{
    
    public function nuevo(){
        return view('reservas.nuevo', [
            'paquete' => paquete::paginate()
        ]);
    } 
    //guarda la reserva desde la vista de admin
    public function savereserve(Request $req){
        $save = new reserva();
        $save->paquete_id=$req->paquete_id;
        $save->nombrepersona=$req->nomcliente;
        $save->apellidopersona=$req->apecliente;
        $save->correo=$req->correo;
        $save->telefono=$req->ncelular;
        $save->fecha=$req->ftour;

        $save->nroadultos=$req->nadultos;
        $save->nroniños=$req->nniños;

        $paquete = paquete::find($req->paquete_id);//se busca el precio del paquete
        $p = $paquete->precio;//se busca el precio del paquete
        //se calcula el monto a pagar por adultos y niños (a mitad de precio)
        $montoAdulto = ($p * $req->nadultos);
        $montoNiño=(($p * $req->nniños)/2);
        $totalPago= ($montoAdulto + $montoNiño);//monto total del tour
        $save->total = $totalPago;
        $save->save();

        return $this->lista();

    }
    //guarda la reserva desde el incio (el usuario)
    public function savereserva(Request $req){
        $save = new reserva();
        $save->paquete_id=$req->paquete_id;
        $save->nombrepersona=$req->nomcliente;
        $save->apellidopersona=$req->apecliente;
        $save->correo=$req->correo;
        $save->telefono=$req->ncelular;
        $save->fecha=$req->ftour;
        $save->nroadultos=$req->nadultos;
        $save->nroniños=$req->nniños;

        $paquete = paquete::find($req->paquete_id);//se busca el precio del paquete
        $p = $paquete->precio;//se busca el precio del paquete
        //se calcula el monto a pagar por adultos y niños (a mitad de precio)
        $montoAdulto = ($p * $req->nadultos);
        $montoNiño=(($p * $req->nniños)/2);
        $totalPago= ($montoAdulto + $montoNiño);//monto total del tour
        $save->total = $totalPago;
        $save->save();
        return back();
    }
    //muestra todas las reservas al administrador
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
        
        $update->paquete_id=$req->paquete_id;
        $update->nombrepersona=$req->nomcliente;
        $update->apellidopersona=$req->apecliente;
        $update->correo=$req->correo;
        $update->telefono=$req->ncelular;
        $update->fecha=$req->ftour;
        $update->nroadultos=$req->nadultos;
        $update->nroniños=$req->nniños;
        
        $paquete = paquete::find($req->paquete_id);//se busca el precio del paquete
        $p = $paquete->precio;//se busca el precio del paquete
        //se calcula el monto a pagar por adultos y niños (a mitad de precio)
        $montoAdulto = ($p * $req->nadultos);
        $montoNiño=(($p * $req->nniños)/2);
        $totalPago= ($montoAdulto + $montoNiño);
        $update->total = $totalPago;//monto total del tour
        $update->save();
        return $this->lista();
    }
    public function update($id){
        $res = reserva::find($id);
        return view('reservas.actualizar',compact('res'),[
            'paquete' => paquete::paginate()
        ]);
    }
     //envia la informacion del paquete seleccionado por el usuario
    public function reservapaquete($id){
        $paquete = paquete::find($id);
        return view('Reservas',compact('paquete'));

    }

}
