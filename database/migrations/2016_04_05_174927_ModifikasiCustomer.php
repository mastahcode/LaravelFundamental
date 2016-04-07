<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifikasiCustomer extends Migration
{
    
    public function up()
    {
        Schema::table('custemer', function(Blueprint $kolom){
           $kolom->string('alamat');
        });
        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('custemer', function (Blueprint $kolom){
           $kolom->dropColumn('alamat');

        });
    }
}
