<?php

namespace Database\Seeds;

use App\ObatModel;
use Illuminate\Database\Seeder;

class ObatSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $obat = [
            [
                'nama_obat' => 'Bodrexin',
                'jenis_obat' => 'Tablet',
                'stok_obat' => 15,
                'harga' => 3000
            ],
            [
                'nama_obat' => 'Paracetamol',
                'jenis_obat' => 'Tablet',
                'stok_obat' => 20,
                'harga' => 15000
            ],
            [
                'nama_obat' => 'Redoxon',
                'jenis_obat' => 'Tablet',
                'stok_obat' => 20,
                'harga' => 20000
            ],
            [
                'nama_obat' => 'Lodia',
                'jenis_obat' => 'Tablet',
                'stok_obat' => 20,
                'harga' => 25000
            ]
        ];
        ObatModel::insert($obat);
    }
}