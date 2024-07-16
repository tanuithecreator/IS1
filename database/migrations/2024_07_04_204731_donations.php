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
        {
            Schema::create('donations', function (Blueprint $table) {
                $table->id('donationsid');
                $table->string('item');
                $table->unsignedBigInteger('id')->nullable(); // Foreign key field to users table
                $table->unsignedBigInteger('volunteerid')->nullable(); // Foreign key field to volunteers table
                $table->text('description');
                $table->string('Quantity');
                $table->text('location');
                $table->timestamps();

                $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
                $table->foreign('volunteerid')->references('volunteerid')->on('volunteers')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
