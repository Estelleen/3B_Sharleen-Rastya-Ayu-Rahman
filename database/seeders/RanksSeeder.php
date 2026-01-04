<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Ranks;

class RanksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [   'nama_ranks' => 'Supernova',
                'deskripsi' => 'Mahir (Advanced)'
        ],
    ];
        Ranks::insert($data);
    }
}
