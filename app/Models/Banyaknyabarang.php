<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banyaknyabarang extends Model
{
    use HasFactory;
    protected $table = "banyaknyabarang";
    protected $primaryKey = 'id';
    protected $fillable = [
        'banyaknya_barang'
    ];
}

