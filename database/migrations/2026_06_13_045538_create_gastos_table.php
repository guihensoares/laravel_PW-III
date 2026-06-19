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
        Schema::create('gastos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('registro_financeiro_id')->constrained('registro_financeiro')->onDelete('cascade');
            $table->string('descricao');
            $table->decimal('valor', 10, 2);
            $table->enum('categoria', ['materia_prima', 'equipamento', 'transporte', 'embalagem', 'outros'])->default('outros');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gastos');
    }
};
