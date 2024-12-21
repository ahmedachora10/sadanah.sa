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
            $table->string('job_title_ar')->nullable()->after('image');
            $table->string('job_title_en')->nullable()->after('image');
            $table->string('author_ar')->nullable()->after('image');
            $table->string('author_en')->nullable()->after('image');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn('job_title_ar');
            $table->dropColumn('job_title_en');
            $table->dropColumn('author_en');
        });
    }
};
