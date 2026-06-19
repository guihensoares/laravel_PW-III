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
        Schema::create('registro_financeiro', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->date('data')->unique();
            $table->decimal('total_ganhos', 10, 2)->default(0);
            $table->decimal('total_gastos', 10, 2)->default(0);
            $table->text('observacoes')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registro_financeiro');
    }
};
