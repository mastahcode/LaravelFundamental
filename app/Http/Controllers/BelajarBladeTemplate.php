<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BelajarBladeTemplate extends Controller
{
    
    public function belajarBlade()
    {
        return view('BelajarBladeTemplate.MasterPage');
    }
    
    public function panggilLayout()
    {
        $nama = 'waviq';
        return view('BelajarBladeTemplate.TestPanggilLayout',  compact('nama'));
    }
}
