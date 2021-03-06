<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function mobil()
    {
    return $this->belongsTo(Mobil::class, 'datamobil_id', 'id');
    }

    public function supir()
    {
    return $this->belongsTo(Supir::class);
    }

    public function user()
    {
    return $this->belongsTo(User::class);
    }
}
