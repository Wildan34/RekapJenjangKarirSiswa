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

    /**
     * @return BelongsTo<User, $this>
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * @return HasMany<SiswaKelas, $this>
     */
    public function SiswaKelas(): HasMany
    {
        return $this->hasMany(SiswaKelas::class);
    }

    /**
     * @return HasMany<Minat, $this>
     */
    public function Minat(): HasMany
    {
        return $this->hasMany(Minat::class);
    }
}
