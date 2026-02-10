<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('produtos', function (Blueprint $table) {
        $table->id();
        $table->string('nome');
        $table->decimal('preco', 10, 2); // 10 dígitos no total, 2 decimais
        $table->integer('quantidade');
        $table->boolean('ativo')->default(true);
        $table->timestamps();
        $table->unsignedBigInteger('categoria_id');
        $table->foreign('categoria_id')->references('id')->on('categorias');
        // Na migration create_produtos_table
        $table->foreignId('categoria_id')->constrained();
        // Na migration create_produtos_table
        $table->foreignId('categoria_id')
            ->constrained()
            ->onDelete('cascade');
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
