<?php

use Illuminate\Database\Seeder;

class DummiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $kelurahans = [
            ['id_kelurahan' => 'kel-0001', 'nama_kelurahan' => 'tawanganom'],
            ['id_kelurahan' => 'kel-0002', 'nama_kelurahan' => 'milangasri'],
            ['id_kelurahan' => 'kel-0003', 'nama_kelurahan' => 'sukowinangun'],
            ['id_kelurahan' => 'kel-0004', 'nama_kelurahan' => 'sugihwaras'],
            ['id_kelurahan' => 'kel-0005', 'nama_kelurahan' => 'wates'],
            ['id_kelurahan' => 'kel-0006', 'nama_kelurahan' => 'sumberdodol'],
            ['id_kelurahan' => 'kel-0007', 'nama_kelurahan' => 'botok'],
            ['id_kelurahan' => 'kel-0008', 'nama_kelurahan' => 'truneng'],
            ['id_kelurahan' => 'kel-0009', 'nama_kelurahan' => 'taji'],
            ['id_kelurahan' => 'kel-0010', 'nama_kelurahan' => 'sumursongo'],
        ];

        DB::table('kelurahans')->insert($kelurahans);
    }
}
