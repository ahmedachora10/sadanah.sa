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
        Schema::table('headlines', function (Blueprint $table) {
            $table->longText('title_ar')->change();
            $table->longText('title_en')->change();
            $table->longText('subtitle_ar')->change();
            $table->longText('subtitle_en')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('headlines', function (Blueprint $table) {
            $table->string('title_ar')->change();
            $table->string('title_en')->change();
            $table->string('subtitle_ar')->change();
            $table->string('subtitle_en')->change();
        });
    }
};