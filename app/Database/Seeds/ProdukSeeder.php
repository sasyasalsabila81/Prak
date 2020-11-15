<?php

namespace App\Database\Seeds;

class ProdukSeeder extends \CodeIgniter\Database\Seeder
{
    public function run()
    {
        $data = [
            [
                'id' => 1,
                'nama_produk' => 'Baju',
                'deskripsi_produk' => 'Baju Mahal Nihh',
            ],
            [
                'id' => 2,
                'nama_produk' => 'Celana',
                'deskripsi_produk' => 'Celana Mahal Nihh',
            ],
        ];
        $this->db->table('produk')->insertBatch($data);
        // Simple Queries
        // $this->db->query("INSERT INTO users (username, email) VALUES(:username:, :email:)",
        //         $data
        // );

        // Using Query Builder

    }
}