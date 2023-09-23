<?php

namespace App\Http\Controllers;

use App\Models\Pembukuan;

use App\Models\UMKM;
use Illuminate\Http\Request;

class PembukuanController extends Controller
{
    public function getPembukuanWithUMKM()
    {
        // Perform the join operation between the Stok and UMKM tables
        $pembukuanWithUMKM = Pembukuan::join('u_m_k_m_s as umkms', 'pembukuans.umkm_id', '=', 'umkms.id')
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            ->get();

        // Return the result as a response, or you can process it further as needed
        return view('pembukuan', ['pembukuankWithUMKM' => $pembukuanWithUMKM, 'active' => 'Pembukuan', 'listUmkm' => UMKM::all()]);
    }
    public function getPembukuanWithUMKM2()
    {
        // Perform the join operation between the Stok and UMKM tables
        $stokWithUMKMAndPembukuan = Pembukuan::join('u_m_k_m_s', 'pembukuans.umkm_id', '=', 'u_m_k_m_s.id')
            ->select('pembukuans.*', 'u_m_k_m_s.nama as umkm_name', 'u_m_k_m_s.id as umkm_id')
            // ->where('pembukuans.id', '=', '1')
            ->get();

        // Return the result as a response, or you can process it further as needed
        return view('pembukuan', ['pembukuanWithUMKM' => $stokWithUMKMAndPembukuan, 'active' => 'Pembukuan']);
    }
}
