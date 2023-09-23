<?php

namespace Database\Seeders;

use App\Models\Stock;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StokSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $stocks = json_decode(file_get_contents(storage_path('datasets/stoks.json')));
        foreach ($stocks as $stock) {
            Stock::create([
                'umkm_id'=> 1,
                'nama' => $stock->nama,
                'jumlah' => $stock->jumlah,
                'tipe' => $stock->tipe
            ]);
            
            
        }
    }
}
