<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('transactions', function (Blueprint $table) {
           $table->id();
$table->unsignedBigInteger('id_products');
$table->integer('quantity');
$table->decimal('total_price', 12, 2);
$table->boolean('status')->default(0);
$table->timestamps();

            // membuat relasi ke table product
            $table->foreign('id_products')
                ->references('id')
                ->on('products')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
