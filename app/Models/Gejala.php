<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'nama_gejala'];

    public function kerusakans()
    {
        // return $this->belongsToMany(Kerusakan::class, 'kerusakans_gejalas');
        return $this->belongsToMany(Kerusakan::class, 'kerusakans_gejalas', 'gejala_id', 'kerusakan_id');

    }
}
