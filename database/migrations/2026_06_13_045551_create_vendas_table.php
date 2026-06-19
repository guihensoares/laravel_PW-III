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
        Schema::create('vendas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('registro_financeiro_id')->constrained('registro_financeiro')->onDelete('cascade');
            $table->string('produto');
            $table->integer('quantidade');
            $table->decimal('valor_unitario', 10, 2);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendas');
    }
};
