<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Customer extends Migration
{
    
    public function up()
    {
        Schema::create('custemer', function (Blueprint $kolom) {
            
            $kolom->increments('id');
            $kolom->string('nama');
            $kolom->integer('umur');
                
        });
        
        
    }

    
    public function down()
    {
        Schema::drop('custemer');
    }
}
