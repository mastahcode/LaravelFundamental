<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class MiddlewareController extends Controller
{
    public function __construct() {
        $this->middleware('umur',['only'=>'rahasia']);
    }

    public function index(){
        
        return view('belajarMiddleware.index');
    }
    
    public function rahasia(){
        return view('belajarMiddleware.rahasia');
    }
    
    public function tolak(){
        return view('belajarMiddleware.tolak');
    }
}
