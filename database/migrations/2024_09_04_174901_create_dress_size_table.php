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
        Schema::create('dress_size', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('dress_id');
            $table->unsignedBigInteger('size_id');
            $table->boolean('active');
            // $table->integer('quantity');
            $table->unique(['dress_id','size_id']);

            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dress_size');
    }
};
