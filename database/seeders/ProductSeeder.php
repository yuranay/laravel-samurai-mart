<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [];
        for ($i = 1; $i <= 10; $i++) {
            $product = [
                'name' => '商品' . $i,
                'description' => '商品' . $i . 'の説明',
                'price' => rand(),
                'category_id' => rand(),
                'image' => 'product' . $i . '.jpg',
                'recommend_flag' => rand(),
                'carriage_flag' => rand(),
            ];
            $products[] = $product;

            foreach ($products as $product) {
                Product::create([
                    'name' => $product,
                    'description' => $product,
                    'price' => $product,
                    'category_id' => $product,
                    'image' => $product,
                    'recommend_flag' => $product,
                    'carriage_flag' => $product,
                ]);
            }
        }
    }
}
