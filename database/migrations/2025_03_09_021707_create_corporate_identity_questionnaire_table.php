<?php

use App\Models\CorporateIdentity;
use App\Models\Questionnaire;
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
        Schema::create('corporate_identity_questionnaire', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(CorporateIdentity::class);
            $table->foreignIdFor(Questionnaire::class);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('corporate_identity_questionnaire');
    }
};