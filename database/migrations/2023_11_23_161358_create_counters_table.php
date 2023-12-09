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
        Schema::create('counters', function (Blueprint $table) {
            $table->id();

            $table->string('title1');
            $table->string('num1');
            $table->longText('text1');

            $table->string('title2');
            $table->string('num2');
            $table->longText('text2');

            $table->string('title3');
            $table->string('num3');
            $table->longText('text3');

            $table->string('title4');
            $table->string('num4');
            $table->longText('text4');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counters');
    }
};
