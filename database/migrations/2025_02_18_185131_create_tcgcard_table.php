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
        Schema::create('tcgcard', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description');
            $table->string('franchise');
            $table->string('collection');
            $table->integer('price');
            $table->string('PSAgrade');
            $table->string('image');
            $table->date('launchDate');
            $table->string('rarity');
            $table->float('pullRate');
            $table->string('language');
            $table->integer('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tcgcard');
    }
};
