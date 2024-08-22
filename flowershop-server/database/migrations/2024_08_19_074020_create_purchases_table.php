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
        Schema::create('purchases', function (Blueprint $table) {
        $table->id();
        $table->string('name', 50);
        $table->string('email', 255);
        $table->string('delivery_address', 255);
        $table->string('delivery_method');
        $table->foreignId('bouquet_id')->constrained('bouquets');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('purchases');
    }
};
