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
        Schema::create('thrash_events', function (Blueprint $table) {
            $table->id();
            $table->string('geo_x');
            $table->string('geo_y');
            $table->string('city');
            $table->integer('caller_id');
            $table->integer('utilizator_id');
            $table->integer('trash_id');
            $table->integer('trash_status');
            $table->string('adress');
            $table->timestamp('time_called');
            $table->timestamp('time_cleaned');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('thrash_events');
    }
};
