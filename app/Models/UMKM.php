<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Pembukuan;
use App\Models\Stock;

class UMKM extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama'
    ];

    function Pembukuan() {
        $this->hasMany(Pembukuan::class);
    }

    function Stock() {
        $this->hasMany(Stock::class);
    }
}