<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('production_tasks', function (Blueprint $table) {
            $table->id();

            $table->foreignId('order_item_id')
                ->unique()
                ->constrained('order_items')
                ->cascadeOnDelete();

            $table->date('start_date')->nullable();

            $table->unsignedInteger('estimated_days')->default(3);

            $table->date('deadline');

            $table->timestamp('started_at')->nullable();

            $table->timestamp('completed_at')->nullable();

            $table->string('production_status')->default('waiting');

            $table->text('notes')->nullable();

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('production_tasks');
    }
};
