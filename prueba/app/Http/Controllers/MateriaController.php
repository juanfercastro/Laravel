<?php

namespace App\Http\Controllers;

use App\Models\Alumn;
use App\Models\Materia;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function listarMaterias(){
        $materias['materias'] = Materia::all();

        return view('list-materias', $materias);
    }

    public function matricularAlumnosForm($id){
        $data = array();
        $data['materia'] = Materia::find($id);
        $data['alumnos'] = Alumn::all();

        return view('form-matricula', $data);
    }

    public function matricularAlumnos(Request $request, $id){
        $id_alumnos = $request->get('id_alumnos');
        $materia = Materia::find($id);
        $alumnos = Alumn::whereIn('id', $id_alumnos)->get();
        $materia->alumnos = $alumnos;
    }
}
