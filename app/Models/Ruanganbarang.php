<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ruanganbarang extends Model
{
    use HasFactory;
    protected $table = "ruanganbarang";
    protected $primaryKey = 'id_ruanganbarang';
    protected $fillable = [
        'nama_barang','ruangan','kode_penanggung_jawab','kondisi_barang'
    ];
}
