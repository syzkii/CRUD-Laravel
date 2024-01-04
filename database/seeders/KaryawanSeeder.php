<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KaryawanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Karyawans')->insert([
            'nama' => 'Rifki A',
            'jeniskelamin' => 'cowo',
            'notelepon' => '081111111111'

        ]);
    }
}
