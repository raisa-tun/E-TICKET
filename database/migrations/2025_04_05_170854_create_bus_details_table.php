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
        Schema::create('bus_details', function (Blueprint $table) {
           // $table->engine = 'InnoDB';
            $table->bigIncrements('id')->nullable();
            $table->bigInteger('bus_id')->unsigned()->nullable();
            $table->foreign('bus_id')->references('id')->on('bus_overviews')->onDelete('cascade')->nullable();
            $table->string('code_no')->nullable();
            $table->string('total_seats')->nullable();
            $table->string('price')->nullable();
            $table->string('available_seats')->nullable();
            $table->string('start_point')->nullable();
            $table->string('end_point')->nullable();
            $table->string('arrival_time')->nullable();
            $table->string('ac_or_non_ac')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bus_details');
    }
};
