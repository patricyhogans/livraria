<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function index()
    {
       $livros = [
        "dia e noite",
        "declinio",
        "rua do medo"
    ];
       
    $monica = "dentuça";
    $cebolinha = "egoista";
    $cascao = "sujo";
    $magali = "gulosa";
 $turmamonica= [
            "monica: $monica",
            "cascao:$cascao ",
            "cebolinha:$cebolinha ",
            "magali:$magali "

        ];
    print_r($turmamonica);

    }
}
