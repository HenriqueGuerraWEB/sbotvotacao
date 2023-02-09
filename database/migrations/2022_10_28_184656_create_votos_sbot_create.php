<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votos_sbot_create', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('eleitor_id');
            $table->string('candidato_id');
            $table->string('tipo_voto');            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('votos_sbot_create');
    }
};
