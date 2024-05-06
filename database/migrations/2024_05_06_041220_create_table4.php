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
        Schema::create('table4', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('table3_id');
            $table->foreign('table3_id')->references('id')->on('table3')->onDelete('cascade');
            $table->string('column1');
            $table->string('column2');
            // Thêm các cột khác nếu cần
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table4');
    }
};
