<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(){
    Schema::create('donation_recipient', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('donationsid');
        $table->unsignedBigInteger('recipient_id');
        $table->timestamps();

        $table->foreign('donationsid')->references('donationsid')->on('donations')->onDelete('cascade');
        $table->foreign('recipient_id')->references('recipient_id')->on('recipients')->onDelete('cascade');
    });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donation_recipient');
    }
};
