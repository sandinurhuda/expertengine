<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gejala extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'nama_gejala'];

    public function penyakits()
    {
        return $this->belongsToMany(Penyakit::class, 'penyakits_gejalas');
    }
}
