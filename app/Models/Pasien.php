<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    protected $table = 'pasiens';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nama',
        'tanggal_lahir',
        'nomor_rekam_medis',
        'nomor_telepon',
        'alamat',
        'jenis_kelamin',
        'riwayat_penyaki',
        'created_at',
        'updated_at',
    ];
}
