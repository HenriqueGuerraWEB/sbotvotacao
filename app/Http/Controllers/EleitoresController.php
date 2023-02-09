<?php

namespace App\Http\Controllers;

use App\Models\Eleitores;
use Illuminate\Http\Request;

class EleitoresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Eleitores
        $eleitores = Eleitores::latest()->paginate(999);
      
        return view('eleitores.index',compact('eleitores'))
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
        return view('eleitores.create');
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
            'nome' => 'required',
            'email' => 'required',
            'crm' => 'required',
            'sbot' => '',
            'coomtoce' => '',            
        ]);
        
        $row['sbot'] = (isset($row['sbot'])) ? $row['sbot'] : 0;
        $row['coomtoce'] = (isset($row['coomtoce'])) ? $row['coomtoce'] : 0;
        
        Eleitores::create($row);
       
        return redirect()->route('eleitores.index')
                        ->with('Sucesso','Eleitor cadastrado com sucesso!');        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eleitores  $eleitores
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $collection = Eleitores::find($id);
        return view('eleitores.show',compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eleitores  $eleitores
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $collection = Eleitores::find($id);
        return view('eleitores.edit',compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Eleitores  $eleitores
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $row = $request->all();
        // dd($row);
        $request->validate([
            'nome' => 'required',
            'email' => 'required',
            'crm' => 'required',
            'sbot' => '',
            'coomtoce' => '',            
        ]);
        
        $row['sbot'] = (isset($row['sbot'])) ? $row['sbot'] : 0;
        $row['coomtoce'] = (isset($row['coomtoce'])) ? $row['coomtoce'] : 0;
      
        Eleitores::find($id)->update($row);
      
        return redirect()->route('eleitores.index')
                        ->with('Sucesso','Eleitor editado com sucesso!');        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eleitores  $eleitores
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Eleitores::find($id)->delete();       
        return redirect()->route('eleitores.index')
                        ->with('Sucesso','Eleitor editado com sucesso!');        
    }
}
