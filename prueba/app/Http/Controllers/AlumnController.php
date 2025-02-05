<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumn;

class AlumnController extends Controller
{
    public function addAlumn(){
        $nombre = "Ruben Otero";
        $dni = "55555555X";
        $media = 05.000;
        $a = new Alumn();

        $a->nombre = $nombre;
        $a->dni = $dni;
        $a->media = $media;

        $a->save();

        return view('alta-alumn');
    }

    public function getAlumns(){
        $alumnos = Alumn::all();
        $data['alumnos'] = $alumnos;
        return view('list-alumns', $data);
    }

    public function getAlumn($id){
        $alumno = Alumn::where('id', $id)->get();
        $data['alumnos'] = $alumno;
        return view('list-alumns', $data);
    }
}
