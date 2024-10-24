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
        Schema::create('postagrms', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author')->unique;
            $table->string('subtitle');
            $table->date('date');
            $table->text('post');
            $table->string('contact');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('postagrms');
    }
};
