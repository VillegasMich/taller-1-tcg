<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('tcgcard', 't_c_g_cards');
        Schema::table('t_c_g_cards', function (Blueprint $table) {
            $table->float('pullRate')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('t_c_g_cards', function (Blueprint $table) {
            $table->float('pullRate')->change();
        });
        Schema::rename('t_c_g_cards', 'tcgcard');

    }
};
