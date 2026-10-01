<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->foreignId('category_id')
                ->constrained('categories')
                ->onDelete('cascade');

            $table->string('name');
            $table->string('sku')->unique();
            $table->decimal('price', 10, 2);
            $table->integer('stock');
        });
    }

    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign(['category_id']);

            $table->dropColumn([
                'category_id',
                'name',
                'sku',
                'price',
                'stock',
            ]);
        });
    }
};