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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('dress_id');
            $table->unsignedBigInteger('size_id');
            $table->unsignedBigInteger('dress_size_id');
            $table->decimal('price');
            $table->dateTime('from');
            $table->dateTime('to');
            $table->enum('state',['Pending', 'Approved', 'Rejected', 'Cancel'])->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservatioms');
    }
};
