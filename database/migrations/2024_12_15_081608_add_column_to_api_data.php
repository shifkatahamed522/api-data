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
        Schema::table('api_data', function (Blueprint $table) {
            $table->id();
            $table->string('product_name',50);
            $table->string('product_code',50);
            $table->string('unit_price',50);
            $table->string('qty',50);
            $table->string('total_price',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('api_data', function (Blueprint $table) {
            //
        });
    }
};
