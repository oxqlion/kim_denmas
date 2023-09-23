<?php

namespace App\Http\Controllers;
use App\Models\Pembukuan;
use App\Models\UMKM;

use App\Models\UMKM;
use Illuminate\Http\Request;

class PembukuanController extends Controller
{

    function getAllPengeluaranById(Request $req) {
        
    }

    public function getPembukuanWithUMKM()
    {
        // Perform the join operation between the Stok and UMKM tables
        $pembukuanUmkm = Pembukuan::join('u_m_k_m_s as umkms', 'pembukuans.umkm_id', '=', 'umkms.id')
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            ->get();

        // Return the result as a response, or you can process it further as needed

        return view('pembukuan', ['pembukuanUmk' => $pembukuanUmkm, 'active' => 'Pembukuan', 'allUmkm'=> UMKM::all()]);
    }


}
