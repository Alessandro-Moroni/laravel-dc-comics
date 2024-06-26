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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50);
            $table->string('slug', 80)->unique();
            $table->text('description');
            $table->text('thumb');
            $table->string('price', 20);
            $table->string('series', 50);
            $table->string('sale_date', 20);
            $table->string('type', 30);
            $table->text('artists');
            $table->text('writers');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
