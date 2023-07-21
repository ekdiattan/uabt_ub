<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengurus', function(Blueprint $table){
            $table->string('nama');
            $table->string('email');
            $table->string('nim');
            $table->string('fakultas');
            $table->string('prodi');
            $table->string('angkatan');
            $table->string('alamat');
            $table->string('nohp');
            $table->string('jeniskelamin');
            $table->string('divisi');
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
