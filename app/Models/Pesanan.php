<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produkjasa;
use App\Models\User;
use App\Models\Metodebayar;

class Pesanan extends Model
{
    use HasFactory;

    protected $table = 'pesanan';

    protected $primaryKey = 'idpesanan';

    protected $fillable = [
        'invoice',
        'namapemesan',
        'emailpemesan',
        'nohp',
        'namaklinik',
        'lamapakai',
        'total',
        'alamat',
        'domain',
        'waktupesan',
        'bukti',
        'catatan',
        'status',
        'idproduk',
        'iduser',
        'idbayar'
    ];

    public $timestamps = false;

    public function produk()
    {
        return $this->belongsTo(ProdukJasa::class, 'idproduk', 'idproduk');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'id');
    }

    public function metodeBayar()
    {
        return $this->belongsTo(MetodeBayar::class, 'idbayar', 'idbayar');
    }
}
