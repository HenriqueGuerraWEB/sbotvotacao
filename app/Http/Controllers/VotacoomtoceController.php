<?php

namespace App\Http\Controllers;

use App\Models\Candidatos;
use Illuminate\Http\Request;

class VotacoomtoceController extends Controller
{
    //
    public function index()
    { 
            
        //Candidatos
        $candidatos = Candidatos::where('coomtoce', 1)->orderBy('nome')->get();
      
        return view('votacoomtoce',compact('candidatos'));              

    }    
}
