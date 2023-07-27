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
        Schema::create('rentals', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->foreignUlid('car_id')->constrained();
            $table->foreignUlid('customer_id')->constrained();
            $table->foreignUlid('driver_id')->nullable()->constrained();

            $table->dateTime('rent_start_date');
            $table->dateTime('rent_end_date');
            $table->dateTime('car_pick_up');
            $table->dateTime('car_return');

            $table->string('status');
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
        Schema::dropIfExists('rentals');
    }
};
