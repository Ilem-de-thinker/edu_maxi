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
        Schema::create('tutor_suits', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id');
            $table->string('suit_name')->unique();
            $table->uuid('suit_pass_key')->nullable()->unique();
            $table->string('phone')->nullable();
            $table->json('accounts')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tutor_suits');
    }
};
