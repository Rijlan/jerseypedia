<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'nama' => 'CHELSEA 3RD 2018-2019',
                'ligas_id' => 2,
                'gambar' => 'chelsea.png'
            ],
            [
                'nama' => 'LEICESTER CITY HOME 2018-2019',
                'ligas_id' => 2,
                'gambar' => 'leicester.png'
            ],
            [
                'nama' => 'MANCHESTER UNITED AWAY 2018-2019',
                'ligas_id' => 2,
                'gambar' => 'mu.png'
            ],
            [
                'nama' => 'LIVERPOOL AWAY 2018-2019',
                'ligas_id' => 2,
                'gambar' => 'liverpool.png'
            ],
            [
                'nama' => 'TOTTENHAM 3RD 2018-2019',
                'ligas_id' => 2,
                'gambar' => 'tottenham.png'
            ],
            [
                'nama' => 'DORTMUND AWAY 2018-2019',
                'ligas_id' => 1,
                'gambar' => 'dortmund.png'
            ],
            [
                'nama' => 'BAYERN MUNCHEN 3RD 2018-2019',
                'ligas_id' => 1,
                'gambar' => 'munchen.png'
            ],
            [
                'nama' => 'JUVENTUS AWAY 2018-2019',
                'ligas_id' => 4,
                'gambar' => 'juve.png'
            ],
            [
                'nama' => 'AS ROMA HOME 2018-2019',
                'ligas_id' => 4,
                'gambar' => 'asroma.png'
            ],
            [
                'nama' => 'AC MILAN HOME 2018-2019',
                'ligas_id' => 4,
                'gambar' => 'acmilan.png'
            ],
            [
                'nama' => 'LAZIO HOME 2018-2019',
                'ligas_id' => 4,
                'gambar' => 'lazio.png'
            ],
            [
                'nama' => 'REAL MADRID 3RD 2018-2019',
                'ligas_id' => 3,
                'gambar' => 'madrid.png'
            ],
        ];
        DB::table('products')->insert($products);
    }
}
