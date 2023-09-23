<?php

namespace Database\Seeders;

use App\Models\Pembukuan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PembukuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pembukuans = json_decode(file_get_contents(storage_path('datasets/pembukuans.json')));
        foreach ($pembukuans as $pembukuan) {
            Pembukuan::create([
                'nama' => $pembukuan->nama,
                'jumlah' => $pembukuan->kuantitas,
                'harga' => $pembukuan->harga,
                'total' => $pembukuan->total,
                'category' => $pembukuan->category,
                'umkm_id' => 1
            ]);
            
            
        }
    }
}
