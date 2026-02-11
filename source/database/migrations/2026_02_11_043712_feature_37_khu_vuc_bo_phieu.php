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
        Schema::table('locations', function (Blueprint $table) {
           $table->string('phone')->nullable();
           $table->string('address')->nullable();
           $table->string('region')->nullable();
           $table->string('scope')->nullable();
           $table->string('qr')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('locations', function (Blueprint $table) {
            $table->dropColumn('phone');
            $table->dropColumn('address');
            $table->dropColumn('region');
            $table->dropColumn('scope');
            $table->dropColumn('qr');
        });
    }
};
