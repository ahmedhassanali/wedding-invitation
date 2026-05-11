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
        Schema::table('game_scores', function (Blueprint $table) {
            if (!Schema::hasColumn('game_scores', 'wedding_name')) {
                $table->string('wedding_name')->default('كمال و نورا');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('game_scores', function (Blueprint $table) {
            $table->dropColumn('wedding_name');
        });
    }
};
