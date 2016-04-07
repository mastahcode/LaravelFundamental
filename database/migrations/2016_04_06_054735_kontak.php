<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kontak extends Migration
{
    
    public function up()
    {
        Schema::create('kontak', function(Blueprint $kolom){
           $kolom->increments('id');
           $kolom->integer('custemer_id')->unsigned();
           $kolom->string('nomorRumah');
           $kolom->string('nomorHP');
        });
        
        Schema::table('kontak',function(Blueprint $kolom){
            $kolom->foreign('custemer_id')->references('id')->on('custemer')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    
    public function down()
    {
        Schema::drop('kontak');
    }
}
