<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UMKM;

class Stock extends Model
{
    use HasFactory;

    function UMKM() {
        $this->belongsTo(UMKM::class);
    }

}
