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
        Schema::create('user_profile', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Foreign key relationship with the users table
            $table->string('job_title')->nullable();
            $table->string('company')->nullable();
            $table->string('company_website')->nullable();
            $table->string('education')->nullable();
            $table->string('location')->nullable();
            $table->text('availability')->nullable();
            $table->text('contact_preferences')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_profile');
    }
};
