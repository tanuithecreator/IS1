<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToRecipientsTable extends Migration
{
    public function up()
    {
        Schema::table('recipients', function (Blueprint $table) {
            $table->unsignedBigInteger('id')->nullable()->after('recipient_id');

            // Add foreign key constraint
            $table->foreign('id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table('recipients', function (Blueprint $table) {
            $table->dropForeign(['id']);
            $table->dropColumn('id');
        });
    }
}
