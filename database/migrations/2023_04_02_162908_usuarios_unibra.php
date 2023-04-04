<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */

        /* Função para criar as tabelas no banco de dados */

    public function up(): void
    {
        Schema::create('unibra_usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('cpf');
            $table->string('nome_completo');
            $table->string('email');
            $table->string('senha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unibra_usuarios');
    }
};
