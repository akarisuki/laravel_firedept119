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
        Schema::create('taishobutu_mains', function (Blueprint $table) {
            $table->id();
            $table->integer('appendix');
            $table->string('taishobutu_name');
            $table->string('taishobutu_address');
            $table->('taishobutu_tel');
            $table->string('owners_name');
            $table->string('owners_tel');
            $table->
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('taishobutu_mains');
    }
};
