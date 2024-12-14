<?php

use App\Models\JobCity;
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
        Schema::create('job_posts', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(JobCity::class)->nullable();
            $table->string('title_ar')->nullable();
            $table->string('title_en')->nullable();
            $table->string('number')->nullable();
            $table->string('type_ar')->nullable();
            $table->string('type_en')->nullable();
            $table->longText('responsibilities_ar')->nullable();
            $table->longText('responsibilities_en')->nullable();
            $table->longText('requirements_ar')->nullable();
            $table->longText('requirements_en')->nullable();
            $table->longText('experience_ar')->nullable();
            $table->longText('experience_en')->nullable();
            $table->longText('education_ar')->nullable();
            $table->longText('education_en')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_posts');
    }
};