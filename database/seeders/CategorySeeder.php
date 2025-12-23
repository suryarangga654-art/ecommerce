<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name'=> 'Electronik',
                'slug'=> 'electronik',
                'description'=> 'Perangkat elektronik seperti samrtphone, laptop, dan gadget lainnya',
                'is_active'=> true,
            ],
            [
                'name'=>'Fashion Pria',
                'slug'=>'fashion-pria',
                'description'=>'Pakaian,sepatu, dan aksesoris untuk pria',
                'is_active'=>true,
            ],
            [
                'name'=>'Fashion Wanita',
                'slug'=>'fashion-wanita',
                'description'=>'Pakaian,sepatu, dan aksesoris untuk wanita',
                'is_active'=>true,
            ],
            [
                'name'=> 'Makanan & Minumnan',
                'slug'=> 'makanan-minuman',
                'description'=> 'Berbagai makanan ringan, minum dan bahan makanan',
                'is_active'=> true,
            ],
            [
                'name'=> 'Kesehatan & Kecantikan',
                'slug'=> 'kesehatan-kecantikan',
                'description'=> 'Produk kesehatan, skincare, dan kosmetik',
                'is_active'=> true,
            ],
            [
                'name'=> 'Rumah tangga',
                'slug'=> 'rumah-tangga',
                'description'=> 'Perabotan rumah tangga dan dekorasi',
                'is_active'=> true,
            ],
        ];
        foreach ($categories as $category) {
            Category::create($category);
        }
        $this->command->info('✅ Categories seeded successfully!');
    }
}
