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
        Schema::table('caos', function (Blueprint $table) {
            $table->char('sexo')->nullable();
            $table->unsignedBigInteger('pai_id')->nullable();
            $table->unsignedBigInteger('mae_id')->nullable();

            $table->foreign('pai_id')->references('id')->on('caos');
            $table->foreign('mae_id')->references('id')->on('caos');
        });    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('caos', function (Blueprint $table) {
            $table->dropForeign(['pai_id']);
            $table->dropForeign(['mae_id']);

            $table->dropColumn('sexo');
            $table->dropColumn('pai_id');
            $table->dropColumn('mae_id');
        });    }
};
