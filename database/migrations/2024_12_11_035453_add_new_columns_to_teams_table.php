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
        Schema::table('teams', function (Blueprint $table) {
            $table->integer('x_followers')->default(0)->after('x');
            $table->integer('instagram_followers')->default(0)->after('x');
            $table->integer('snapchat_followers')->default(0)->after('x');
            $table->integer('tiktok_followers')->default(0)->after('x');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('teams', function (Blueprint $table) {
            $table->dropColumn('x_followers');
            $table->dropColumn('instagram_followers');
            $table->dropColumn('snapchat_followers');
            $table->dropColumn('tiktok_followers');
        });
    }
};