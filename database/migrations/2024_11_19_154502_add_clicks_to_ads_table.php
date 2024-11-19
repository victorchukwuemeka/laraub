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
        // Check if the 'clicks' column does not exist
        if (!Schema::hasColumn('ads', 'clicks')) {
            
            Schema::table('ads', function (Blueprint $table) {
                $table->unsignedBigInteger('clicks')->default(0)->after('url');
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Check if the 'clicks' column exists before dropping it
        if (Schema::hasColumn('ads', 'clicks')) {
            Schema::table('ads', function (Blueprint $table) {
                $table->dropColumn('clicks');
            });
        }
    }
};
