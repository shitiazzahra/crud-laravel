<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('students')->insert(array(
            array(
                'name' => 'kanaya',
                'address' => 'jakarta utara'
            ),
            array(
                'name' => 'zaza',
                'address' => 'bogor'
            ),
            array(
                'name' => 'vina',
                'address' => 'jonggol'
            ),
        ));
    }
}
