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
        Schema::create('homersekletek', function (Blueprint $table) {
            $table->id("h_id");
            $table->float('hofok',4,2);
            $table->integer('paratartalom');
            $table->dateTime('meres_ideje');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('homersekletek');
    }
};
