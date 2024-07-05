<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\directorio;
use App\Models\contacto;

class DirectorioController extends Controller
{
    public function paginaPrincipal(){
        $directorio = directorio::all();
        return view('directorio');

    }

    public function crearEntrada(){
        return view('crearEntrada');
    }

    public function buscarEntrada(){
        return view('buscar');
    }

    public function verEntrada(){
        $contactos = contacto::all();
        return view('vercontactos', compact('contactos'));
    }

    public function eliminarEntrada(){
        return view('eliminar');
    }

    public function destroy(){
        $destruirContactos = contacto::delete();
        return view('directorio', compact('destruirContactos'));
    }
    

}
