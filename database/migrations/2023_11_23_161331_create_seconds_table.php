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
        Schema::create('seconds', function (Blueprint $table) {
            $table->id();
            $table->longText('title')->nullable();
            $table->longText('subtitle')->nullable();
            $table->longText('title1')->nullable();
            $table->longText('title2')->nullable();
            $table->longText('text1')->nullable();
            $table->longText('text2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('seconds');
    }
};
