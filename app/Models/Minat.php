<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Minat extends Model
{
    protected $table = 'minats';

    protected $fillable = [
        'siswa_id',
        'tahun_ajaran',
        'jenis',
        'kampus',
        'jurusan',
        'perusahaan',
        'posisi',
        'bidang_usaha',
        'catatan',
    ];

    /**
     * @return BelongsTo<Siswa, $this>
     */
    public function Siswa(): BelongsTo
    {
        return $this->belongsTo(Siswa::class);
    }
}
