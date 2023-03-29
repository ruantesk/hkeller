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
        Schema::table('tutors', function (Blueprint $table) {
            $table->string('nome');
            $table->string('email');
            $table->string('endereco');
            $table->string('telefone', 12)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('tutors', function (Blueprint $table) {
            $table->dropColumn('nome');
            $table->dropColumn('email');
            $table->dropColumn('endereco');
            $table->dropColumn('telefone');
        });
    }
};
