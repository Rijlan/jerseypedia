<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LigaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ligas = [
            [
                'nama' => 'Bundesliga',
                'negara' => 'Jerman',
                'gambar' => 'bundesliga.png'
            ],
            [
                'nama' => 'Premier League',
                'negara' => 'Inggris',
                'gambar' => 'premierleague.png'
            ],
            [
                'nama' => 'La Liga',
                'negara' => 'Spanyol',
                'gambar' => 'laliga.png'
            ],
            [
                'nama' => 'Serie A',
                'negara' => 'Italia',
                'gambar' => 'seriea.png'
            ]
        ];
        
        DB::table('ligas')->insert($ligas);
    }
}
