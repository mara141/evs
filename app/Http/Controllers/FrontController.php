<?php namespace evs\Http\Controllers;

use evs\Http\Requests;
use evs\Http\Controllers\Controller;
use Redirect;
use Illuminate\Http\Request;

class FrontController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
	  return view('index');

	}

	public function contacto(){  
    return view('contacto');
	}

    public function reviews(){  
    return view('reviews');
	}

	 public function admin(){
        return view('admin.index');
    }
}