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
        Schema::create('film_favorits', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('genre');
            $table->date('release_date');
            $table->string('overview');
            $table->string('poster_path');
            $table->double('rating');
            $table->integer('views');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('film_favorits');
    }
};
