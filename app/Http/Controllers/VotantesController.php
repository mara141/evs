<?php

namespace evs\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use Redirect;
use evs\Votantes;
use evs\Http\Requests;
use evs\Http\Controllers\Controller;
use evs\Http\Requests\VotanCreateRequest;
use Input;

class VotantesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $votantes = Votantes::all();
        return view('votan.index',compact('votantes'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('votan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VotanCreateRequest $request)
    {
        Votantes::create($request->all());

        if (Input::hasFile('path')) {
    Input::file('path')->move('uploads/my', 'url.xls'); // Moves to /public/uploads/my/url.xls
  

 \Excel::load('uploads/my/url.xls' ,function($archive)
{
    $result = $archive->get();

    foreach($result as $key => $value)
    {
                Votantes::create([
                    'name' => $value->title,
                    'email' =>$value->author,
                    'cedula' =>$value->publication_year
                ]);
            }
          });
}
        //echo $value-> //Echoing some values here

                  return redirect('/votan')->with('message','store');
    
    
     /*\Excel::load('books.xls', function($reader) {
 
            foreach ($reader->get() as $book) {
                Votantes::create([
                    'name' => $book->title,
                    'email' =>$book->author,
                    'cedula' =>$book->publication_year
                ]);
            }
        });
           
        
     return redirect('/votan')->with('message','store');
   */ 
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
