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
        Schema::create('settings_old', function (Blueprint $table) {
            $table->id();
            $table->string('setting_type');
            $table->string('name');
            $table->string('value');
            $table->string('comment')->nullable();
            $table->string('checkSumPriceElements');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings_old');
    }
};
