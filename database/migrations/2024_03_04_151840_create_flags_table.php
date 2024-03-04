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
        Schema::create('flags', function (Blueprint $table) {
            $table->id();
            $table->string('text'); // Column to store the flag text
            $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Foreign key to associate the flag with a user
            $table->enum('level', ['low', 'medium', 'high', 'impossible']); // Enum column to store the level of the flag
            $table->boolean('submitted')->default(false); // Column to indicate whether the flag has been submitted
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flags');
    }
};
