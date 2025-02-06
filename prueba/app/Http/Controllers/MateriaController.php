<?php

namespace App\Http\Controllers;

use App\Models\Materia;
use Illuminate\Http\Request;

class MateriaController extends Controller
{
    public function listarMaterias(){
        $materias['materias'] = Materia::all();

        return view('list-materias', $materias);
    }
}
