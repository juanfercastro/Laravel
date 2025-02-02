<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SimonController extends Controller{
    public function simonSays(Request $request){
        $nivel = 1;
        if (session()->has('numeros')&&session()->has('nivel')) {
            $secuenciaNumeros = session('numeros');
            $nivel = session('nivel');
        }else{
            $secuenciaNumeros = $this->genNumeros($nivel);
            session(['numeros'=>$secuenciaNumeros, 'nivel'=>$nivel]);
        }
        $data['numeros'] = $secuenciaNumeros;
        $data['nivel'] = $nivel;
        return view('simon', $data);
    }

    public function resultado(Request $request){
        $ans = $request->input('ans');
        $secuenciaNumeros = session('numeros');
        $nivel = session('nivel');

        if ($ans = implode('-', $secuenciaNumeros)) {
            $nivel++;
        }else{
            session(['message'=>'Los numeros introducidos no eran correctos']);
            return redirect('/gameOver');
        }

        $secuenciaNumeros = $this->genNumeros($nivel);
        session(['numeros'=>$secuenciaNumeros, 'nivel'=>$nivel]);

        return redirect('/jugar');
    }

    public function gameOver(){
        session()->flush();
        return redirect('/jugar');
    }

    public function genNumeros($long){
        $numeros = [];
        for ($i=0; $i < $long; $i++) { 
            $numeros[] = rand(1, 4);
        }
        return $numeros;
    }
}