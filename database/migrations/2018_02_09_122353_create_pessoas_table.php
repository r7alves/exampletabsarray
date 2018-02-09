<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePessoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('rua')->nullable();
            $table->string('numero')->nullable();
            $table->timestamps();
        });
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome')->nullable();
            $table->date('nascimento')->nullable();
            $table->integer('endereco_id');
            $table->foreign('endereco_id')
                ->references('id')
                ->on('enderecos');                
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pessoas');
        Schema::dropIfExists('enderecos');
    }
}
