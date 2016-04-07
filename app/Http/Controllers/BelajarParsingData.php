<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class BelajarParsingData extends Controller
{
    
    public function ParsingData()
    {
        
        $nama = "samsul";
        
        return view('BelajarParsingData.ParsingData', compact('nama'));
    }
}
