<?php

namespace App\Http\Controllers;

use App\Models\duenio;
use Illuminate\Http\Request;

class duenioController extends Controller
{
    //
    public function duenio($id = 0){
        $duenio = duenio::all();
        return view("duenios", compact("duenio", "id"));
    }

    public function create(){
        return view("crearDuenio");
    }

    public function guardar(Request $request){
        $nvoduenio = new duenio();
        $nvoduenio->nombre = $request->input("nombre");
        $nvoduenio->apellido = $request->input("apellido");
        $nvoduenio->correo = $request->input("correo");
        $nvoduenio->save();

        return redirect("/propiedades/duenio/duenio/1");
    }

    public function duenios($id){
        
    }

}
