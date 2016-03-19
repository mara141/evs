<?php

namespace evs\Http\Controllers;

use Illuminate\Http\Request;

use evs\Http\Requests;
use evs\Http\Controllers\Controller;
use Redirect;
use evs\Eleccion;
use evs\Inst;
use evs\Http\Requests\EleccionCreateRequest;
use evs\DateTime;
use evs\ElectionImages;
class EleccionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eleccions = Eleccion::Eleccions();
        
        return view('eleccion.index',compact('eleccions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        $insts = Inst::lists('alias', 'id');
        return view('eleccion.create',compact('insts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(EleccionCreateRequest $request)
    {
        $input = $request->all();
        if (trim($input['TipoRespuesta']) == 'image')
            $input['TipoRespuesta'] = 1;
                    
        $eleccion = Eleccion::create($input);
          
        if ($input['TipoRespuesta'] == 1) {
            ElectionImages::where('is_draft', 1)->update([
                'is_draft'=>0,
                'election_id'=> $eleccion->id    
            ]);
        }
       
      // Imprime 'Fecha de registro: día/mes/año hora:minutos'
     return redirect('/eleccion')->with('message','store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
