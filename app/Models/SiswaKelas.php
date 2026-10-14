<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class SiswaKelas extends Model
{
    protected $table = 'siswa_kelas';
    protected $fillable = [
        'siswa_id',
        'kelas_id',
        'tahun_ajaran',
    ];

    public function Siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }
    public function Kelas(): BelongsTo 
    {
        return $this->belongsTo(Kelas::class);
    }
}
