<?php

namespace Database\Seeders;

use App\Models\UMKM;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UMKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        UMKM::create([
            'nama' => "Numansa"
        ]);
        UMKM::create([
            'nama' => "Kaderman"
        ]);

        UMKM::create([
            'nama' => "Semanding"
        ]);

        UMKM::create([
            'nama' => "Fitria"
        ]);

        UMKM::create([
            'nama' => "Raig"
        ]);

        UMKM::create([
            'nama' => "Risfina"
        ]);

        UMKM::create([
            'nama' => "Jumroto"
        ]);
        UMKM::create([
            'nama' => "Karelov"
        ]);

        UMKM::create([
            'nama' => "Galuh"
        ]);

    }
}
