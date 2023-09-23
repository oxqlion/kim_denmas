<?php

namespace App\Http\Controllers;
use App\Models\Pembukuan;

use Illuminate\Http\Request;

class PembukuanController extends Controller
{
    function getAllPengeluaranById(Request $req) {
        
    }
    public function getPembukuanWithUMKM()
    {
        // Perform the join operation between the Stok and UMKM tables
        $pembukuanWithUMKM = Pembukuan::join('u_m_k_m_s as umkms', 'pembukuans.umkm_id', '=', 'umkms.id')
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            ->get();

        // Return the result as a response, or you can process it further as needed
        return view('pembukuan', ['pembukuankWithUMKM' => $pembukuanWithUMKM, 'active' => 'Pembukuan']);
    }


    // public function getPembukuanWithUMKM()
    // {
    //     // Perform the join operation between the Stok and UMKM tables
    //     $pembukuanWithUMKM = Pembukuan::join('pembukuans as p1', 'p1.umkm_id', '=', 'umkms.id')
    //         ->select('p1.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_umkm_id')
    //         ->get();
    
    //     // Return the result as a response, or you can process it further as needed
    //     return view('pembukuan', ['pembukuanWithUMKM' => $pembukuanWithUMKM, 'active' => 'Pembukuan']);
    // }


}
