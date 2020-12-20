<?php

namespace App\Http\Controllers;
use App\Models\paquete;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('Paquetes.index', [
            'Paquete' => paquete::paginate()
        ]);
    
    }

    public function reservas()
    {
        return view('Reservas.index');
    }
}
