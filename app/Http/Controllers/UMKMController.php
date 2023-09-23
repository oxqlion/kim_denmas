<?php

namespace App\Http\Controllers;

use App\Models\UMKM;
use Illuminate\Http\Request;

class UMKMController extends Controller
{

    public function store(Request $request){
        $validatedData = $request->validate([
            'nama_umkm' => 'required|min:3'
        ]);

        UMKM::create($validatedData);
        return redirect(route('umkm'));
    }

    public function show(UMKM $umkm){

        return view('',[
            'umkm'=>$umkm
        ]);

    }
}
