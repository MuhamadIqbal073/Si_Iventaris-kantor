<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Namabarang extends Model
{
    use HasFactory;
    protected $table = "namabarang";
    protected $primaryKey = 'id_namabarang';
    protected $fillable = [
        'nama_barang'
    ];
}
