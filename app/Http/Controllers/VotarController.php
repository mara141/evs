<?php

namespace evs\Http\Controllers;

use Illuminate\Http\Request;

use evs\Http\Requests;
use evs\Http\Controllers\Controller;
use evs\Eleccion;
use evs\Votar;
use Carbon\Carbon;
use evs\Inst;
use DB;


class VotarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   

        $eleccions = Eleccion::latest('dateinicio')->where('dateinicio','<=',  carbon::now())->where('datefinal','>=', carbon::now())->get();
       // $eleccions = Eleccion::all();
        return view('votar.index',compact('eleccions'));
         

         //$date = carbon::now();
         //echo 'date actual   ' .$date;
          
         
         /*$eleccions = DB::table('eleccions')->where->('id','2')->value('datefinal');
         echo "date inicio      ".$eleccions;
        
        $eleccionss = Eleccion::lists('datefinal');
         echo "date final    ".$eleccionss;

         if ($date > $eleccions)
         {
            echo "  1";
         }
         else
            echo "  2";
        if ($date > $eleccionss)
            echo "  3";
        else
            echo "  4";
        if ($eleccions > $eleccionss) {
            echo "  6";
        }
        else
        {
            echo "   7";
        }


          /** If(($eleccions = Eleccion::latest('dateinicio')->where('dateinicio','>=', carbon::now())->get()) && $eleccions = Eleccion::latest('datefinal')->where('datefinal','<=', carbon::now())->get() )
            {
                return 'Expiro';
            }

            return view('votar.index',compact('eleccions')); */


    
            
         }
        

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
           \evs\Votos::create([
            'respuesta' => $request['respuesta'],
           
        ]);
           return "Voto Realizado!"; 
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
