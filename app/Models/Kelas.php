<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kelas extends Model
{
    protected $table = 'kelas';
    protected $fillable = [
        'tingkat',
        'nama',
    ];


    public function SiswaKelas(): HasMany
    {
        return $this->hasMany(SiswaKelas::class);
    }
}
