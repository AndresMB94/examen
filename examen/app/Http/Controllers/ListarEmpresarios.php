<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Empresarios;

class ListarEmpresarios extends Controller
{
    //
    public function listarEmpresarios(){
        $listaEmpresarios = Empresarios::where('activo',1)->get();
        return view('listaEmpresarios', ['empresarios' => $listaEmpresarios]);
    }
}
