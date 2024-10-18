<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        User::create([
            'id' => 1,
            'foto_profil' => 'foto_profil/m7PyDNSESX9dRQBHHRfp1HDIC2LEpcRdXw0Aopzm.jpg',
            'nama' => 'Park Juhyun',
            'username' => 'charmgirl_1005',
            'email' => 'agil.musthafa11@gmail.com',
            'password' => '$2y$10$hYZCyyo/3kItwI4dwpy.e.0ddfQ11QmkBYUg03EWLwlZS5.eE.aLq',
            'jenis_kelamin' => 'Wanita',
            'no_hp' => '081234567890',
            'role' => 'Customer',
            'created_at' => '2024-10-14 07:07:58',
            'updated_at' => '2024-10-14 07:07:58',
        ]);

        User::create([
            'id' => 2,
            'foto_profil' => 'foto_profil/3DKsBjlJiKpHLnIknyt026G2l7iCeT2Vhfdd76fU.jpg',
            'nama' => 'Jang Huisoo',
            'username' => 'huisooo',
            'email' => 'admin@gmail.com',
            'password' => '$2y$10$z/YR3GhK5gYYTYJVDbN7RuPCWt1PpbS018hBp.yBtOql3Hnv52G6G',
            'jenis_kelamin' => 'Wanita',
            'no_hp' => '081234567890',
            'role' => 'Admin',
            'created_at' => '2024-10-14 07:12:38',
            'updated_at' => '2024-10-14 07:12:38',
        ]);

        Product::create([
            'id' => 1,
            'varian' => 'Warm',
            'foto_produk' => '/img/Jivajoy Warm.png',
            'stok' => '0'
        ]);

        Product::create([
            'id' => 2,
            'varian' => 'Hot',
            'foto_produk' => '/img/Jivajoy Hot.png',
            'stok' => '0'
        ]);
    }
}
