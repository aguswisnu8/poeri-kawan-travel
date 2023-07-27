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
        Schema::create('cars', function (Blueprint $table) {
            $table->ulid('id')->primary();

            $table->string('name');
            $table->string('brand');
            $table->string('model')->nullable();
            $table->integer('seats');
            $table->year('year');
            $table->string('color')->nullable();
            $table->string('type')->nullable();
            $table->string('transmission');
            $table->string('fuel_type');
            $table->string('status');
            $table->decimal('price_per_hour', 13, 2)->nullable();
            $table->text('features')->nullable();
            $table->text('remarks')->nullable();
            
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
