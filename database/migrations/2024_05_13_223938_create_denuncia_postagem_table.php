<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('denuncia_postagem', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('denunciante_id');
            $table->bigInteger('denunciado_id');
            $table->bigInteger('postagem_id');
            $table->text('conteudo');
            $table->string('status')->default('PENDENTE');
            $table->text('justificativa')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('denuncia_postagem');
    }
};
