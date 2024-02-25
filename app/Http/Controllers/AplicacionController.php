<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\Double;

class AplicacionController extends Controller
{
    //
    public function index(float $area , $numApartamento = 1){
        $aumento = 0;
        $precioxmetro = 1500;

        for($i = 1; $i < $numApartamento; $i++){
            $aumento += 0.1;
        }

        if ($numApartamento === 1){
                return 'Precio: '.($precioxmetro * $area);
        }
        else if ($numApartamento <= 12 and $numApartamento >= 2){
            $precioxmetro += ($precioxmetro * $aumento);
            return 'Precio: '.($precioxmetro * $area);
        }
        else{
            return 'Piso no existente';
        }    
            
    }
}
