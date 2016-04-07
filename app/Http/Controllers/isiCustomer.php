<?php

namespace App\Http\Controllers;

use App\Custemer;

class isiCustomer extends Controller
{
    
    public function index(){
        
        $custemer = Custemer::with('kontaks')->get();
        //dd($custemer);
        
        return view('custemer.custemer', compact('custemer'));
    }
}
