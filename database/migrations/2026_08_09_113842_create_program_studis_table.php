<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('program_studi', function (Blueprint $table) {
            $table->id();

            $table->foreignId('fakultas_id')
                ->constrained('fakultas')
                ->cascadeOnUpdate()
                ->restrictOnDelete();

            $table->string('kode', 20)->unique();
            $table->string('nama');
            $table->string('jenjang', 20);

            $table->string('status', 20)
                ->default('aktif')
                ->index();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('program_studi');
    }
};