<?php

namespace Database\Seeders;

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
        for ($i = 11; $i <= 40; $i ++) {
            DB::table('products')->insert([
                'name' => 'ULTRABOOST 5.0 DNA' . $i,
                'price' => $i. 800000,
                'description' => 'Kenyamanan yang berasal dari aktivitas lari berpadu dengan style kasual pada Sepatu adidas Ultraboost 5.0 DNA ini. Bantalan Boost memberikan pengembalian energi sehingga kamu bisa tampil stylish dan merasa nyaman sepanjang hari. Upper adidas Primeknit yang fleksibel namun suportif.',
            ]);
        }
    }
}
