<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->integer('nim')->unique();
            $table->string('nama');
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role')->default('mahasiswa');
            $table->foreignId('jurusan_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->foreignId('prodi_id')->constrained()->restrictOnUpdate()->restrictOnDelete();
            $table->enum('status_verifikasi', ['pending', 'verified'])->default('pending'); // Menambahkan kolom status_verifikasi
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
