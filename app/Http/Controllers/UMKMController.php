<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;

class UMKMController extends Controller
{
    function getAllUMKM() {
        $umkm = UMKM::all();
        return view();
    }
}
