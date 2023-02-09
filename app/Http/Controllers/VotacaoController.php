<?php

namespace App\Http\Controllers;

use App\Models\Candidatos;
use App\Models\Votacaosbot;
use Illuminate\Http\Request;

class VotacaoController extends Controller
{
    public function indexSbot(Request $request)
    {             
        //Candidatos
        $candidatos = Candidatos::where('sbot', 1)->orderBy('nome')->get();      
        return view('votasbot',compact('candidatos'));

    }   

    public function indexCoomtoce(Request $request)
    {             
        //Candidatos
        $candidatos = Candidatos::where('coomtoce', 1)->orderBy('nome')->get();      
        return view('votacoomtoce',compact('candidatos'));

    }      

    public function post(Request $request)
    {
        //dd($request);
        $data = $request->all();
        $result = Votacaosbot::create([
            'eleitor_id' => $data['eleitor_id'],
            'candidato_id' => $data['candidato_id'],
            'tipo_voto' => $data['tipo_voto'],
        ]);
        if($result) {

            return redirect()->route('votacao.sucesso');
        }
        
    }

    public function sucesso()
    {
        //dd('SUCESSO');
        return view('votos.sbotvotossucesso');
    }

}

