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
            $table->id('caller_id');
            $table->id('utilizator_id');
            $table->id('trash_id');
            $table->id('trash_status');
            $table->timestamps('time_called');
            $table->timestamps('time_cleaned');
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
