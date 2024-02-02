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
        Schema::table('us', function (Blueprint $table) {
            $table->string('name', 50)->nullable();
            $table->string('subname', 50)->nullable();
            $table->date('date');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('us', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('subname');
            $table->dropColumn('date');
        });
    }
};
