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
        Schema::table('congratulations', function (Blueprint $table) {
            $table->string('wedding_name')->default('ahmed-omnya')->after('ip_address');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('congratulations', function (Blueprint $table) {
            $table->dropColumn('wedding_name');
        });
    }
};
