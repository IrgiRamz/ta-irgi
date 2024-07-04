<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produkjasa extends Model
{
    use HasFactory;

    protected $table = 'produkjasa';

    protected $primaryKey = 'idproduk';

    protected $fillable = [
        'kodeproduk',
        'namaproduk',
        'harga',
        'deskripsi',
        'gambar',
        'status'
    ];

    public $timestamps = false;
}
