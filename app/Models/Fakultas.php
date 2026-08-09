<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Fakultas extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'fakultas';

    protected $fillable = [
        'kode',
        'nama',
        'status',
    ];

    public function programStudi(): HasMany
    {
        return $this->hasMany(ProgramStudi::class);
    }

    public function dosen(): HasMany
    {
        return $this->hasMany(Dosen::class);
    }

    public function reviewers(): HasMany
    {
        return $this->hasMany(Reviewer::class);
    }
}