<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NumeroController extends Controller
{
    public function numeroSecreto(){
        if (!session()->has('secreto')) {
            session([
                'secreto'=>rand(1, 1000),
                'tries'=>env('MAX_TRIES'),
                'mensaje'=>null
            ]);
        }
        $data['intentos'] = session('tries');
        $data['message'] = session('mensaje');

        return view('numero', $data);
    }

    public function resultado(Request $request){
        $respuesta = $request->input('number');
        $secreto = session('secreto');
        $intentos = session('tries');

        $intentos--;
        session()->put('tries', $intentos);

        if ($respuesta==$secreto) {
            return redirect('/numero')->with('mensaje', "Has acertado el numero $secreto en ".env('MAX_TRIES')-$intentos." intentosa");
        }
        if ($intentos==0) {
            return redirect('/numero')->with('mensaje', "Se han acabado los intentos");
        }
        if ($respuesta>$secreto) {
            session(['mensaje'=>"El numero secreto es menor, tienes $intentos intentos"]);
        }elseif ($respuesta<$secreto) {
            session(['mensaje'=>"El numero secreto es mayor, tienes $intentos intentos"]);
        }

        return redirect('/numero');
    }

    public function gameOver(){
        session()->flush();
        return redirect('/numero');
    }
}
