<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Custemer extends Model
{
    protected $table = 'custemer';
    
    public function kontaks(){
        
        return $this->hasOne('App\Kontak');
    }
    
    
}
