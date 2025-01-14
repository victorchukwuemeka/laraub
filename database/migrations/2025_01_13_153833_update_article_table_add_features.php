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
        Schema::table('article', function(Blueprint $table){
            $table->string('slug')->unique()->after('title');
            $table->string('thumbnail')->nullable()->after('slug');
            $table->enum('status',[
                'draft', 'published'
            ])->default('draft')->after('thumbnail');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('article', function(Blueprint $table){
            $table->dropColumn(['slug','thumbnail','status']);
        });
    }


    
};
