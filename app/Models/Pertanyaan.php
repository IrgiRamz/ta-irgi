<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;


class Pertanyaan extends Model
{
    use HasFactory;

    protected $table = 'pertanyaan';

    protected $primaryKey = 'idpertanyaan';

    protected $fillable = [
        'pertanyaan',
        'pertanyaan2',
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
