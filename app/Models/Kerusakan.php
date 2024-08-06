<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'nama_kerusakan'];

    public function gejalas()
    {
        // return $this->belongsToMany(Gejala::class, 'kerusakans_gejalas');
        return $this->belongsToMany(Gejala::class, 'kerusakans_gejalas', 'kerusakan_id', 'gejala_id');
    }
}
