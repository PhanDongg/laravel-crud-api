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
        // Schema::create('table2', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('description');
        //     $table->unsignedBigInteger('table1_id');
        //     $table->foreign('table1_id')->references('id')->on('table1');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table2');
    }
};
