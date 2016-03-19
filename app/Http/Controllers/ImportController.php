<?php

namespace evs\Http\Controllers;

use Illuminate\Http\Request;
use evs\Book;
use maatwebsite\Excel\Facades\Excel;
use evs\Http\Requests;
use evs\Http\Controllers\Controller;

class ImportController extends Controller
{
    public function import()
    { 

    	
    	\Excel::load('books.xls', function($reader) {
 
     		foreach ($reader->get() as $book) {
     			Book::create([
     				'name' => $book->title,
     				'author' =>$book->author,
     				'year' =>$book->publication_year
     			]);
      		}
		});
		return Book::all();
    }
}
