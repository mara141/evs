<?php

namespace evs\Http\Controllers;

use Illuminate\Http\Request;
use evs\Votantes;
use maatwebsite\Excel\Facades\Excel;
use evs\Http\Requests;
use evs\Http\Controllers\Controller;
use Input;

class ImportVotantesController extends Controller
{
     public function import()
    { 
            
    	
           \Excel::load('books.xls', function($reader) {
 
     		foreach ($reader->get() as $book) {
     			Votantes::create([
     				'name' => $book->title,
     				'email' =>$book->author,
     				'cedula' =>$book->publication_year
     			]);
      		}
		});
           
		return Votantes::all();
    }

     public function index()
    {
        $importarvotan = Votantes::All();
        return view('ImportarVotan.index',compact('Votantes'));
    }


}

