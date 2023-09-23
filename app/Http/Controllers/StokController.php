<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StokController extends Controller
{
    //
    public function getStokWithUMKM()
    {
        // Perform the join operation between the Stok and UMKM tables
        $stokWithUMKM = Stock::join('umkm', 'stok.umkm_id', '=', 'umkm.id')
            ->select('stok.*', 'umkm.name as umkm_name', 'umkm.umkm_id as umkm_umkm_id')
            ->get();

        // Return the result as a response, or you can process it further as needed
        return view('stok', [$stokWithUMKM, 'active' => 'Stok']);
    }
}
