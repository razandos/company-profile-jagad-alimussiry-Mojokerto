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
        Schema::create('istigosah', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained(); // Menambahkan foreign key ke tabel users
            $table->string('title');
            $table->text('description');
            $table->text('descriptionlengkap');
            $table->string('image');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('istigosah');
    }
};
