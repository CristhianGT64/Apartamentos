<?php

namespace App\Http\Controllers;

use App\Models\propiedad;
use Illuminate\Http\Request;

class propiedadController extends Controller
{
    //
    public function propiedades(){
        $propiedad = propiedad::all();
        return view("propiedades", compact("propiedad"));
    }

    public function duenioPropiedades($id){
        // $propiedad = propiedad::find($id);
        $propiedad = propiedad::where("idDuenio", $id)->get();
        return view("propiedadesDuenio", compact("propiedad"));
    }

    public function duenios($id){
        $propiedad = propiedad::find($id);
    }
}
