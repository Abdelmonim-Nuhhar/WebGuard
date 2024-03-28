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
        Schema::table('flags', function (Blueprint $table) {
            // Ensure to handle the existing data in the 'level' column before dropping it.
            $table->dropColumn('level');
        });
    
        Schema::table('flags', function (Blueprint $table) {
            $table->enum('level', [
                'Session Id low Security',
                'Session Id medium Security',
                'Session Id high Security',
                'Session Id impossible Security',
                'File Upload Challenge',
                'XSS Reflected',
                'XSS Store',
                'XSS BaseDom',
                'Security MisConfig',
                'SQL basic',
                'SQL Medium',
                'SQL Advance',
            ])->after('user_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
