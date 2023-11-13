<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodepenanggungjawab extends Model
{
    protected $table = "kodepenanggungjawab";
    protected $primaryKey = 'id_kodepenanggungjawab';
    protected $fillable = [
        'kode_penanggung_jawab'
    ];
}
