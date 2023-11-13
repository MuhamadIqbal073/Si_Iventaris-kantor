<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengadaan extends Model
{
    use HasFactory;
    protected $table = "pengadaan";
    protected $primaryKey = 'id_pengadaan';
    protected $fillable = [
        'nama_barang','merek','no_kontrak','tanggal','banyaknya_barang','harga_satuan','jumlah_harga','keterangan'
    ];
}
