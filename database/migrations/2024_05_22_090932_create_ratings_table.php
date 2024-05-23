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
        Schema::create('ratings', function (Blueprint $table) {

        $table->id();
        $table->tinyInteger('score')->unsigned()->default(0);
        $table->unsignedBigInteger('post_id');
        $table->foreign('post_id')->references('id')->on('posts')->onDelete('cascade');
        $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ratings');
    }
};
