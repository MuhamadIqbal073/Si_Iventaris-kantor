<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barangmasuk extends Model
{
    use HasFactory;
    protected $table = "barangmasuk";
    protected $primaryKey = 'id_barangmasuk';
    protected $fillable = [
        'nama_barang','kode_barang','merk','ukuran','bahan','tanggal','no_pabrik','no_rangka','no_mesin','no_polisi','no_bpkb','asal_usul','banyaknya_barang','harga_satuan','jumlah_harga','kode_penanggung_jawab','keterangan'
    ];
}
