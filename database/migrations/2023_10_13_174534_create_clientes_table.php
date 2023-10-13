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
        Schema::create('clientes', function (Blueprint $table) {
            $table->id(); // Chave primária autoincremento (Id)
            $table->string('nome'); // Campo Nome (string)
            $table->integer('idade'); // Campo Idade (int)
            $table->decimal('saldo', 10, 2); // Campo Saldo (number)
            $table->timestamps(); // Campos de data/hora de criação e atualização
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
};
