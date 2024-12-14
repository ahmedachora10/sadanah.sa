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
        Schema::create('influencer_join_requests', function (Blueprint $table) {
            $table->id();
            $table->string('username');
            $table->string('phone');
            $table->string('email');
            $table->longText('content_provided');
            $table->mediumText('interests');

            $table->json('snapchat')->default([]);
            $table->json('instagram')->default([]);
            $table->json('tiktok')->default([]);
            $table->json('x')->default([]);
            $table->json('youtube')->default([]);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('influencer_join_requests');
    }
};