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
        Schema::table('blogs', function (Blueprint $table) {
            // Add user_id column
            $table->unsignedBigInteger('user_id')->nullable()->after('id');
            // Add foreign key constraint
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            // Drop foreign key constraint
            $table->dropForeign(['user_id']);
            // Drop user_id column
            $table->dropColumn('user_id');

        });
    }
};
