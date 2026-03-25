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
        Schema::create('game_scores', function (Blueprint $table) {
            $table->id();
            $table->string('player_name');             // اسم اللاعب
            $table->integer('time_seconds');           // الوقت بالثواني
            $table->integer('moves');                  // عدد الحركات
            $table->string('ip_address')->nullable();
            $table->timestamp('created_at')->useCurrent();
            $table->index(['time_seconds', 'moves']);  // لترتيب أسرع اللاعبين
            $table->index('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('game_scores');
    }
};
