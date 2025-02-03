<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

use function Psy\debug;

class UserController extends Controller{
    public function eliminar($id){

    }

    public function formAlta(){
        Log::debug("en formAlta");
        return view('alta-form');
    }

    public function alta(Request $r){
        Log::debug("en formAlta");
        $r->validate([
            'nombre'=>'required',
            'telf'=>'required'
        ]);

        session()->put('nombre', $r->get('nombre'));

        //almacenar en sesion
        $r->session()->put('clave', 'valor');
        //recuperar una variable de sesion
        $r->session()->get('clave');
        //Recuperar y eliminar la variable de sesion
        $r->session()->pull('clave');
        //saber si una variable existe en la sesion y no es NULL
        $r->session()->has('clave');
        //saber se una variable de sesion existe aunque sea NULL
        $r->session()->exists('clave');
        //elimina una variable de sesion
        $r->session()->forget('clave');
        //eliminar todos los datos de la sesion
        $r->session()->flush();
        //regenerar el ID de sesion
        $r->session()->regenerate();
        //regenerar el Id de sesion y eliminar todos los datos 
        $r->session()->invalidate();

        $data = [];
        $data['nombre']=$r->get("nombre");
        $data['apellidos']=$r->get("apellidos");
        $data['telefono']=$r->get("telefono");
        return view('datos-alta',$data);
    }
}