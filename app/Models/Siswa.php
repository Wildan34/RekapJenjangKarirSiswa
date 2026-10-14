<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Siswa extends Model
{
    protected $table = 'siswas';
    protected $fillable = [
        'user_id',
        'nis',
        'nama',
        'alamat',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function SiswaKelas(): HasMany {
        return $this->hasMany(SiswaKelas::class);
    } 
    public function Minat(): HasMany {
        return $this->hasMany(Minat::class);
    } 
}
