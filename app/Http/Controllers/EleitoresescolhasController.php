<?php

namespace App\Http\Controllers;

use App\Models\Eleitores;
use Illuminate\Http\Request;

class EleitoresescolhasController extends Controller
{
    //
    public function index(Request $request)
    {
        $form = $request->all();

        $eleitor = Eleitores::where('crm', $form['crm'])->first();

        if(!$eleitor){
            echo '<script>alert("CRM não encontrado")</script>';
            return back();
        };

        $request->session()->put('eleitor_id', $eleitor->id);
        $request->session()->put('tipo_voto', $eleitor->sbot);
        // dd(\Session::get('eleitor_id'));
        //  dd($eleitor);

        return view('eleitorescolhas', compact('eleitor'));       
    }    

}
