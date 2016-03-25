<?php

namespace evs\Http\Controllers;

use evs\Http\Controllers\Controller;
use evs\Inst;
use Illuminate\Http\Request;
use Redirect;
use Session;

class InstController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insts = Inst::all();
        return view('institucion.index', compact('insts'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('institucion.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // print_r($request->all());die();
        Inst::create($request->all());

        return redirect('/institucion')->with('message', 'store');
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
        $inst = Inst::find($id);
        return view('institucion.edit', ['inst' => $inst, 'isEditView' => 1]);
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
        $inst = Inst::find($id);
        $inst->update($request->all());
        $inst->save();
        Session::flash('message', 'Institución Actualizada Correctamente');
        return Redirect::to('/institucion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inst = Inst::find($id);
        $inst->delete();
        Session::flash('message', 'Usuario eliminado Correctamente');
        return Redirect::to('/institucion');
    }
}
