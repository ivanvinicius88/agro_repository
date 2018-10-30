<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbsafraTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbsafra', function (Blueprint $table) {
            $table->unsignedInteger('pescodigo');
            $table->unsignedInteger('lavcodigo');
            $table->unsignedInteger('maqcodigo');
            $table->increments('safcodigo');
            $table->increments('safdescricao');
            $table->increments('safano', 4);
            $table->timestamps();

            $table->foreign('pescodigo')->references('pescodigo')->on('tbpessoa'); 
            $table->foreign('lavcodigo')->references('lavcodigo')->on('tblavoura'); 
            $table->foreign('maqcodigo')->references('maqcodigo')->on('maquinario'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbsafra');
    }
}
