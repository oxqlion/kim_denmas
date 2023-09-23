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
        // $stokWithUMKM = Stock::join('umkms', 'stocks.umkm_id', '=', 'umkms.id')
        //     ->select('stocks.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_umkm_id')
        //     ->get();

        $stokWithUMKM = Stock::join('umkms', 'stocks.umkm_id', '=', 'umkms.id')
            ->select('stocks.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            ->get();

        // Return the result as a response, or you can process it further as needed
        return view('stok', ['stokUmkm' => $stokWithUMKM, 'active' => 'Stok']);
    }
}
