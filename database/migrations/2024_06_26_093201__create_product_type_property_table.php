<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('product_type_properties', function (Blueprint $table) {
            $table->id();
            $table->string(column: 'name');
            // $table->integer(column: 'sorting')->nullable();
            $table->integer(column: 'order_column')->nullable();
            $table->foreignId(column: 'product_type_id')->nullable()->index();
            $table->boolean(column: 'section')->default(0);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_type_properties');
    }
};
