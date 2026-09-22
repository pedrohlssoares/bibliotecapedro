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
        Schema::create('livros', function (Blueprint $table) {
            $table->id();
            $table->string('titulo', 255);
            $table->string('isbn', 45);
            $table->integer('anopublicacao');
            $table->string('descricao', 255);
            $table->integer('paginas');
            //Chaves Estrangeiras
            $table->foreignId('id_autor')->constrained('autores');
            $table->foreignId('id_categoria')->constrained('categorias');
            $table->timestamps();


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('livros');
    }
};
