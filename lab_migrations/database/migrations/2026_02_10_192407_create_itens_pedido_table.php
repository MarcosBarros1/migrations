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
        Schema::create('itens_pedido', function (Blueprint $table) {
            $table->id();
            // FK para o Pedido
            $table->foreignId('pedido_id')->constrained('pedidos')->onDelete('cascade');
            // FK para o Produto
            $table->foreignId('produto_id')->constrained('produtos');

            $table->integer('quantidade');
            $table->decimal('valor_unitario', 10, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('itens_pedido');
    }
};
