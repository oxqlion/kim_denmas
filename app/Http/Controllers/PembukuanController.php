<?php

namespace App\Http\Controllers;

use App\Models\Pembukuan;
use App\Models\UMKM;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class PembukuanController extends Controller
{

    function getAllPengeluaranById(Request $req)
    {
    }

    public function getPembukuanWithUMKM()
    {
        $pembukuanUmkm = Pembukuan::join('u_m_k_m_s as umkms', 'pembukuans.umkm_id', '=', 'umkms.id')
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            ->orderBy('pembukuans.created_at', 'desc')
            ->get();

        return view('pembukuan', ['pembukuanUmk' => $pembukuanUmkm, 'active' => 'Pembukuan', 'allUmkm' => UMKM::all()]);
    }

    public function getPembukuanWithUMKMById()
    {
        $pembukuanUmkm = Pembukuan::join('u_m_k_m_s as umkms', 'pembukuans.umkm_id', '=', 'umkms.id')
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            ->orderBy('pembukuans.created_at', 'desc')
            ->get();

        return view('pembukuan', ['pembukuanUmk' => $pembukuanUmkm, 'active' => 'Pembukuan', 'allUmkm' => UMKM::all()]);
    }

    public function getPemasukan($id)
    {
        $pembukuanUmkm = Pembukuan::join('u_m_k_m_s as umkms', 'pembukuans.umkm_id', '=', 'umkms.id')
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            ->where('pembukuans.category', 'Pemasukan')
            ->where('pembukuans.umkm_id', $id)
            ->orderBy('pembukuans.created_at', 'desc')
            ->get();

        return view('pemasukan', ['pembukuanUmk' => $pembukuanUmkm, 'active' => 'Pembukuan', 'allUmkm' => UMKM::all()]);
    }

    public function getPengeluaran($id)
    {
        $pembukuanUmkm = Pembukuan::join('u_m_k_m_s as umkms', 'pembukuans.umkm_id', '=', 'umkms.id')
            ->select('pembukuans.*', 'umkms.nama as umkm_name', 'umkms.id as umkm_id')
            ->where('pembukuans.category', 'Pengeluaran')
            ->where('pembukuans.umkm_id', $id)
            ->orderBy('pembukuans.created_at', 'desc')
            ->get();

        return view('pemasukan', ['pembukuanUmk' => $pembukuanUmkm, 'active' => 'Pembukuan', 'allUmkm' => UMKM::all()]);
    }
    public function createPembukuan(Request $request)
    {
        // Validate the incoming data
        $validatedData = $request->validate([
            'umkm_id' => 'required|integer', // Assuming umkm_id is required and should be an integer
            'nama' => 'required|string', // Assuming category is required and should be a string
            'category' => 'required|in:Pemasukan,Pengeluaran',
            'jumlah' => 'required|numeric', // Assuming amount is required and should be numeric
            'harga' => 'required|numeric', // Assuming amount is required and should be numeric
        ]);

        Pembukuan::create([
            'umkm_id' => $validatedData['umkm_id'],
            'category' => $validatedData['category'],
            'nama' => $validatedData['nama'],
            'jumlah' => $validatedData['jumlah'],
            'harga' => $validatedData['harga'],
            'total' => $validatedData['jumlah'] * $validatedData['harga']
        ]);
        return Redirect::route('pembukuan-main');
    }
}
