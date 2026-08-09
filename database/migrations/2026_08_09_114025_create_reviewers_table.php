<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('reviewers', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')
                ->nullable()
                ->unique()
                ->constrained('users')
                ->nullOnDelete();

            $table->string('nama');

            $table->string('nidn')
                ->nullable()
                ->index();

            $table->string('email')
                ->nullable();

            $table->string('bidang_keahlian')
                ->nullable();

            $table->foreignId('fakultas_id')
                ->nullable()
                ->constrained('fakultas')
                ->nullOnDelete();

            $table->string('status', 20)
                ->default('aktif')
                ->index();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('reviewers');
    }
};