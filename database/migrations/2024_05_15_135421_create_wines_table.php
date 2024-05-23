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
        Schema::create('wines', function (Blueprint $table) {
            $table->id();
            $table->string('winery', 50);
            $table->string('wine', 200);
            $table->decimal('average', 2, 1)->unsigned();
            $table->string('reviews', 50);
            $table->string('slug', 150)->unique();
            $table->string('location', 100);
            $table->string('image', 500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('wines');
    }
};
