<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class BayiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bayi')->insert([
            [
            'no_urut' => '348104568',
            'nama' => 'Baskono',
            'alamat' => 'Jl.Semanggi timur Malang',
            'tgl_lahir' => '2007-08-7',
            'bb_lahir' => '2.9',
            'tb_lahir' => '50'
            ],
            [
            'no_urut' => '348104569',
            'nama' => 'Monika',
            'alamat' => 'Jl.Semanggi timur Malang',
            'tgl_lahir' => '2000-05-9',
            'bb_lahir' => '3',
            'tb_lahir' => '51'
            ],
            [
            'no_urut' => '348104570',
            'nama' => 'Budi',
            'alamat' => 'Jl.Semanggi timur Malang',
            'tgl_lahir' => '2000-07-3',
            'bb_lahir' => '3',
            'tb_lahir' => '50'
            ],
            [
            'no_urut' => '348104571',
            'nama' => 'Aji',
            'alamat' => 'Jl.Semanggi timur Malang',
            'tgl_lahir' => '2000-01-5',
            'bb_lahir' => '3.4',
            'tb_lahir' => '50'
            ]
            
        ]);
    }
}
