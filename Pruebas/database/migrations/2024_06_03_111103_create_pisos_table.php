<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('pisos', function (Blueprint $table) {
            $table->id();
            $table->string('nom_referencia');
            $table->enum('tipus', ['Pis', 'Casa']);
            $table->string('direccio');
            $table->string('poblacio');
            $table->integer('m2');
            $table->integer('habitacions');
            $table->integer('lavabos');
            $table->integer('preu');
            $table->enum('tipus_cuina', ['Americana', 'Oberta (sense barra/illa)', 'Independent']);
            $table->enum('estat', ['Per reformar', 'Per entrar a viure', 'Nou']);
            $table->text('descripcio');
            $table->boolean('ascensor');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('pisos');
    }
};
