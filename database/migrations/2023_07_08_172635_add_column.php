<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        Schema::table('pengurus', function(Blueprint $table){
            $table->string('nama')->nullable();
            $table->string('email')->nullable();
            $table->string('nim')->nullable();
            $table->string('fakultas')->nullable();
            $table->string('prodi')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('alamat')->nullable();
            $table->string('nohp')->nullable();
            $table->string('jeniskelamin')->nullable();
            $table->string('divisi')->nullable();
            $table->string('upadated_at')->nullable();
            $table->string('created_at')->nullable();


        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
