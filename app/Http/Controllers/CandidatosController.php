<?php

namespace App\Http\Controllers;

use App\Models\Candidatos;
use Illuminate\Http\Request;

class CandidatosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Candidatos
        $candidatos = Candidatos::latest()->paginate(999);
      
        return view('candidatos.index',compact('candidatos'))
            ->with('i', (request()->input('page', 1) - 1) * 5); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('candidatos.create');        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $row = $request->all();
        // dd($row);
        $request->validate([
            'foto' => '',
            'nome' => 'required',
            'sbot' => '',
            'coomtoce' => '',            
        ]);
        
        $row['sbot'] = (isset($row['sbot'])) ? $row['sbot'] : 0;
        $row['coomtoce'] = (isset($row['coomtoce'])) ? $row['coomtoce'] : 0;
        
        Candidatos::create($row);
       
        return redirect()->route('candidatos.index')
                        ->with('Sucesso','Candidato cadastrado com sucesso!');          
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Candidatos  $candidatos
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $collection = Candidatos::find($id);
        return view('candidatos.show',compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Candidatos  $candidatos
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $collection = Candidatos::find($id);
        return view('candidatos.edit',compact('collection'));        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Candidatos  $candidatos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = $request->all();
        // dd($row);
        $request->validate([
            'foto' => '',
            'nome' => 'required',
            'sbot' => '',
            'coomtoce' => '',            
        ]);
        
        $row['coomtoce'] = (isset($row['sbot'])) ? $row['sbot'] : 0;
        $row['coomtoce'] = (isset($row['coomtoce'])) ? $row['coomtoce'] : 0;
      
        Candidatos::find($id)->update($row);
      
        return redirect()->route('candidatos.index')
                        ->with('Sucesso','Candidato editado com sucesso!');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Candidatos  $candidatos
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Candidatos::find($id)->delete();       
        return redirect()->route('candidatos.index')
                        ->with('Sucesso','Candidatos editado com sucesso!');         
    }
}
