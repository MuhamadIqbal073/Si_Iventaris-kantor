<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodebarang extends Model
{
    use HasFactory;
    protected $table = "kodebarang";
    protected $primaryKey = 'id';
    protected $fillable = [
        'kode_barang'
    ];
}
