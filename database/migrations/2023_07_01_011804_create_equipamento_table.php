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
        Schema::create('equipamento', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tipoEquipamento')->nullable();
            $table->string('nome');
            $table->string('quantidade');
            $table->string('descricao');
            $table->timestamps();

            $table->foreign('tipoEquipamento')->references('id')->on('tipo_equipamento');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('equipamento');
    }
};
