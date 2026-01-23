<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('donvi', function (Blueprint $table) {
            $table->id();
            $table->string('ten')->unique();
        });
        Schema::create('khom', function (Blueprint $table) {
            $table->id();
            $table->string('ten')->unique();
        });
        Schema::create('khuvuc', function (Blueprint $table) {
            $table->id();
            $table->string('ten')->unique();
            $table->integer('khom_id');
            $table->integer('donvi_id');
            $table->string('diaban');
            $table->string('diem');
            $table->string('toado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('khuvuc');
        Schema::dropIfExists('khom');
        Schema::dropIfExists('donvi');
    }
};
