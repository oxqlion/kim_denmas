<?php

namespace App\Http\Controllers;

use App\Models\Pembukuan;

use Illuminate\Http\Request;

class PembukuanController extends Controller
{
    function getAllPengeluaranById(Request $req)
    {
    }

    // public function getPembukuanWithUMKM()
    // {
    //     // Perform the join operation between the Stok and UMKM tables
    //     $pembukuanWithUMKM = Pembukuan::join('pembukuans', 'pembukuans.umkm_id', '=', 'umkms.id')
    //         ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_umkm_id')
    //         ->get();

    //     // Return the result as a response, or you can process it further as needed
    //     return view('pembukuan', ['pembukuankWithUMKM' => $pembukuanWithUMKM, 'active' => 'Pembukuan']);
    // }


    public function getPembukuanWithUMKM($id)
    {
        // Perform the join operation between the Stok and UMKM tables
        $stokWithUMKMAndPembukuan = Pembukuan::join('umkms', 'pembukuans.umkm_id', '=', 'umkms.', $id)
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            // ->where('pembukuans.umkm_id', '=', $id)
            ->get();

        // Return the result as a response, or you can process it further as needed
        return view('pembukuan', ['pembukuanWithUMKM' => $stokWithUMKMAndPembukuan, 'active' => 'Pembukuan']);
    }

    public function getPembukuanWithUMKM2()
    {
        // Perform the join operation between the Stok and UMKM tables
        $stokWithUMKMAndPembukuan = Pembukuan::join('umkms', 'pembukuans.umkm_id', '=', 'umkms.id')
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            // ->where('pembukuans.id', '=', '1')
            ->get();

        // Return the result as a response, or you can process it further as needed
        return view('pembukuan', ['pembukuanWithUMKM' => $stokWithUMKMAndPembukuan, 'active' => 'Pembukuan']);
    }
}
