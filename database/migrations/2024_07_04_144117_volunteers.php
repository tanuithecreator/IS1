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
        Schema::create('volunteers', function (Blueprint $table) {
            $table->id('volunteerid');
            $table->string('name');
            $table->string('Phone');
            $table->string('interest');
            $table->unsignedBigInteger('userid')->nullable(); // Foreign key field to users table
            $table->unsignedBigInteger('categoryid')->nullable(); // Foreign key field to categories table
            $table->timestamps();

            $table->foreign('userid')->references('userid')->on('users')->onDelete('cascade');
          $table->foreign('categoryid')->references('categoryid')->on('categories')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('volunteers');
    }
};


