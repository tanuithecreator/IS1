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
            Schema::create('categories', function (Blueprint $table) {
                $table->id('categoryid');
                $table->string('item');
                $table->unsignedBigInteger('userid')->nullable; // Foreign key field to users table
                $table->unsignedBigInteger('volunteerid')->nullable; // Foreign key field to volunteers table
                $table->text('description')->nullable();
                $table->text('location')->nullable();
                $table->timestamps();

                $table->foreign('userid')->references('userid')->on('users')->onDelete('cascade');
                
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
