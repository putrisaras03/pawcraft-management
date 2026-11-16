<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_id')
                ->constrained('orders')
                ->cascadeOnDelete();

            $table->foreignId('product_id')
                ->constrained('products')
                ->restrictOnDelete();

            $table->foreignId('product_variant_id')
                ->nullable()
                ->constrained('product_variants')
                ->nullOnDelete();

            // Snapshot nama produk dan variasi saat transaksi
            $table->string('product_name');
            $table->string('variant_name')->nullable();
            $table->string('variant_value')->nullable();

            // Permintaan khusus pelanggan
            $table->text('custom_request')->nullable();

            $table->unsignedInteger('quantity')->default(1);

            $table->decimal('unit_price', 12, 2);
            $table->decimal('subtotal', 12, 2);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};
