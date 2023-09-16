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
        Schema::create('invoices', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->foreignUlid('rental_id')->constrained();

            $table->date('date');
            $table->date('due_date');

            $table->decimal('subtotal_car', 13, 2);
            $table->decimal('subtotal_driver', 13, 2)->nullable();

            $table->decimal('tax', 13, 2)->nullable();
            $table->decimal('total', 13, 2);

            $table->text('remarks');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
