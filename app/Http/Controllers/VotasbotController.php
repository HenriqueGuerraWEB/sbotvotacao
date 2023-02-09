<?php

namespace App\Http\Controllers;

use App\Models\Candidatos;
use Illuminate\Http\Request;

class VotasbotController extends Controller
{
    public function index(Request $request)
    {             
        //Candidatos
        $candidatos = Candidatos::where('sbot', 1)->orderBy('nome')->get();      
        return view('votasbot',compact('candidatos'));

    }   
}
