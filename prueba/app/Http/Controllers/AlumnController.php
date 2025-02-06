<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumn;
use App\Models\Equipo;

class AlumnController extends Controller
{
    public function altaForm(){
        $equipos = Equipo::all();
        return view('form-alumno',['equipos'=>$equipos]);
    }
    public function addAlumn(Request $r){
        $nuevo = new Alumn();
        $nuevo->nombre = $r->get('nombre');
        $nuevo->dni = $r->get('dni');
        $nuevo->media = $r->get('media');
        $nuevo->equipo_id=$r->get('equipo_id')=='-1'?null:$r->get('equipo_id');

        $nuevo->save();

        return $this->getAlumns();
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
