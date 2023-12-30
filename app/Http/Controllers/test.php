<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function index()
    {
        date_default_timezone_set('America/Sao_Paulo');
        $agora=date('H:i');
        $agora=date('17:58');
      
        $noite_inicio=('18:00');
        $noite_fim=('00:00');

        $manha_inicio=('5:00');
        $manha_fim=('11:59');

        $tarde_inicio=('12:00');
        $tarde_fim=('17:59');

        if($agora > $noite_inicio && $agora < $noite_fim){
            echo "boa Noite";
        } else if($agora < $manha_fim && $manha_inicio > $agora ){
            echo "bom dia";
        }else if($agora > $tarde_inicio && $agora < $tarde_fim){
            echo 'boa tarde';
        }


    }
}
