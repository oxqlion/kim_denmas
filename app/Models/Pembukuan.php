<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\UMKM;

class Pembukuan extends Model
{
    use HasFactory;

    protected $fillable = [
        'umkm_id'
    ];

    function UMKM() {
        $this->belongsTo(UMKM::class);
    }
}
