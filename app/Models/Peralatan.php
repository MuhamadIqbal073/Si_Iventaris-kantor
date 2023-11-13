<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peralatan extends Model
{
    use HasFactory;
    protected $table = "peralatan";
    protected $primaryKey = 'id_peralatan';
    protected $fillable = [
        'nama_barang','kode_barang','merk','ukuran','bahan','tanggal','no_pabrik','no_rangka','no_mesin','no_polisi','no_bpkb','asal_usul','banyaknya_barang','harga_satuan','jumlah_harga','kode_penanggung_jawab','keterangan'
    ];

    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
}

