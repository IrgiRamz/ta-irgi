<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Metodebayar extends Model
{
    use HasFactory;

    protected $table = 'metodebayar';

    protected $primaryKey = 'idbayar';

    protected $fillable = [
        'kode',
        'pembayaran',
        'norek',
        'tipe',
        'status'
    ];

    public $timestamps = false;
}
