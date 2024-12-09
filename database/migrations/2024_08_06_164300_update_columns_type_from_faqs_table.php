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
        Schema::table('faqs', function (Blueprint $table) {
            $table->text('question_ar')->change();
            $table->text('question_en')->change();
            $table->text('answer_ar')->change();
            $table->text('answer_en')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faqs', function (Blueprint $table) {
            $table->string('question_ar')->change();
            $table->string('question_en')->change();
            $table->string('answer_ar')->change();
            $table->string('answer_en')->change();
        });
    }
};