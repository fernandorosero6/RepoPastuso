<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEjemplaresTable extends Migration
{
    public function up()
    {
        Schema::create('ejemplares', function (Blueprint $table) {
            $table->id();
            $table->string('localizacion');
            $table->timestamps();


            $table->unsignedBigInteger('libro_id');
            $table->foreign('libro_id')
                ->references('id')
                ->on('libros')
                ->onDelete('cascade');
            
        });
    }

    public function down()
    {
        Schema::dropIfExists('ejemplares');
    }
}