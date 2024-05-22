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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->text('content')->nullable();
            $table->string('category')->nullable();
            $table->string('author')->nullable();
            $table->string('status')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->integer('view_count')->default(0);
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('categories');// thằng này để mapping mqh với category table
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // gốc
        Schema::dropIfExists('posts');

        //mới thêm, dùng để xóa cột view_count(nếu cần)
        // Schema::table('posts', function (Blueprint $table) {
        //     $table->dropColumn('view_count');
        // });

    }
};
