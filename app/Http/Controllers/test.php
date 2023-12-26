<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function index()
    {
        
        $str = 'Patricy Silva Santos';
        $p2 = 'Daniel Jose Santos';
        $strSobreNome = '';


        return 'Ola :'.$p1.' '.$p2;
    }
}
