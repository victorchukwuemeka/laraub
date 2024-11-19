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
        // Check if the 'last_visit' column does not exist
        if (!Schema::hasColumn('users', 'last_visit')) {
            Schema::table('users', function (Blueprint $table) {
                $table->timestamp('last_visit')->nullable();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Check if the 'last_visit' column exists before dropping it
        if (Schema::hasColumn('users', 'last_visit')) {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('last_visit');
            });
        }
    }
};
