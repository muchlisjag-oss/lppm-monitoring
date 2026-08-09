<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dosen', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->nullable()
                ->unique()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('nidn', 30)->unique();

            $table->string('nama');

            $table->string('gelar_depan')
                ->nullable();

            $table->string('gelar_belakang')
                ->nullable();

            $table->string('email')
                ->nullable();

            $table->string('no_hp', 30)
                ->nullable();

            $table->foreignId('fakultas_id')
                ->nullable()
                ->constrained('fakultas')
                ->nullOnDelete();

            $table->foreignId('program_studi_id')
                ->nullable()
                ->constrained('program_studi')
                ->nullOnDelete();

            $table->string('jabatan_akademik')
                ->nullable();

            $table->string('status', 20)
                ->default('aktif')
                ->index();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dosen');
    }
};