<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FruitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('fruits')->insert(array(
            array(
                'nama_buah' => 'apel', 
                'harga' => '5.000'
            ),
            array(
                'nama_buah' => 'anggur', 
                'harga' => '60.000'
            ),
            array(
                'nama_buah' => 'manggis', 
                'harga' => '10.000'
            )
        ));
    }
}