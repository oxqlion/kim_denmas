<?php

namespace App\Http\Controllers;

use App\Models\Pembukuan;
use App\Models\UMKM;

use Illuminate\Http\Request;

class PembukuanController extends Controller
{

    function getAllPengeluaranById(Request $req)
    {
    }

    public function getPembukuanWithUMKM()
    {
        $pembukuanUmkm = Pembukuan::join('u_m_k_m_s as umkms', 'pembukuans.umkm_id', '=', 'umkms.id')
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            ->get();

        return view('pembukuan', ['pembukuanUmk' => $pembukuanUmkm, 'active' => 'Pembukuan', 'allUmkm' => UMKM::all()]);
    }

    public function getPembukuanWithUMKMById()
    {
        $pembukuanUmkm = Pembukuan::join('u_m_k_m_s as umkms', 'pembukuans.umkm_id', '=', 'umkms.id')
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            ->get();

        return view('pembukuan', ['pembukuanUmk' => $pembukuanUmkm, 'active' => 'Pembukuan', 'allUmkm' => UMKM::all()]);
    }

    public function getPemasukan($id)
    {
        $pembukuanUmkm = Pembukuan::join('u_m_k_m_s as umkms', 'pembukuans.umkm_id', '=', 'umkms.id')
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            ->where('pembukuans.category', 'Pemasukan')
            ->where('pembukuans.umkm_id', $id)
            ->get();

        return view('pemasukan', ['pembukuanUmk' => $pembukuanUmkm, 'active' => 'Pembukuan', 'allUmkm' => UMKM::all()]);
    }

    public function getPengeluaran($id)
    {
        $pembukuanUmkm = Pembukuan::join('u_m_k_m_s as umkms', 'pembukuans.umkm_id', '=', 'umkms.id')
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            ->where('pembukuans.category', 'Pengeluaran')
            ->where('pembukuans.umkm_id', $id)
            ->get();

        return view('pemasukan', ['pembukuanUmk' => $pembukuanUmkm, 'active' => 'Pembukuan', 'allUmkm' => UMKM::all()]);
    }
}
