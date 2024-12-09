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
        Schema::table('our_services', function (Blueprint $table) {
            $table->renameColumn('title', 'title_ar');
            $table->renameColumn('description', 'description_ar');
            $table->string('title_en')->after('sort')->nullable();
            $table->string('description_en')->after('sort')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('our_services', function (Blueprint $table) {
            $table->renameColumn('title_ar', 'title');
            $table->renameColumn('description_ar', 'description');
            $table->dropColumn('title_en');
            $table->dropColumn('description_en');
        });
    }
};