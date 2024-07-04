<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanyaan extends Model
{
    use HasFactory;

    protected $table = 'pertanyaan';

    protected $primaryKey = 'idpertanyaan';

    protected $fillable = [
        'pertanyaan',
        'jawaban',
        'status',
        'iduser'
    ];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'iduser', 'id');
    }
}
