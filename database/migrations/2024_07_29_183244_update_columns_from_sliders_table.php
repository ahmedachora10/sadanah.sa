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
        Schema::table('sliders', function (Blueprint $table) {
            $table->json('styles')->after('id')->nullable();
            $table->renameColumn('image', 'image_ar');
            $table->string('image_en')->after('id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('sliders', function (Blueprint $table) {
            $table->renameColumn('image_ar', 'image');
            $table->dropColumn('image_en');
            $table->dropColumn('styles');
        });
    }
};