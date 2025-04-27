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
        Schema::create('bus_overviews', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('bus_brand_name')->nullable();
            $table->string('total_bus_no')->nullable();
            $table->string('available_bus_no')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_overviews');
    }
};
