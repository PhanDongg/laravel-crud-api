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
        Schema::create('table5_table6', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('table5_id');
            $table->unsignedBigInteger('table6_id');
            $table->timestamps();

            $table->foreign('table5_id')->references('id')->on('table5')->onDelete('cascade');
            $table->foreign('table6_id')->references('id')->on('table6')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table5_table6');
    }
};
