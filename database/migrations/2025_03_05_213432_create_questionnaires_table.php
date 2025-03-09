<?php

use App\Enums\TargetAudience;
use App\Models\CorporateIdentity;
use App\Models\LogoType;
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
        Schema::create('questionnaires', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(LogoType::class);
            // $table->foreignIdFor(CorporateIdentity::class);
            $table->boolean('new_client')->default(true);
            $table->string('client_name');
            $table->string('client_nationality');
            $table->string('company_name');
            $table->string('phone_number');
            $table->string('email');

            $table->string('brand_name');
            $table->string('brand_about');
            $table->string('project_type');
            $table->enum('target_audience', array_map(fn($item) => $item->value, TargetAudience::cases()));
            $table->string('brand_personality');
            $table->string('competitors');
            $table->json('favorite_colors')->nullable();
            $table->json('excluded_colors')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('questionnaires');
    }
};