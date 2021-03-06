<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\MediaProduct;
use Illuminate\Database\Seeder;

class ProductMediaTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $products = Product::all();

        foreach ($products as $product) {
            for ($i = 1; $i <= 4; $i++) {
                MediaProduct::create([
                    'product_id'   => $product->id,
                ]);
            }

        }
    }
}
