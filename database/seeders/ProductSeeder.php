<?php

namespace Database\Seeders;

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
        Product::create([
            'name' => 'LARAVEL Y LIVEWIRE',
            'cost' => 200,
            'price' => 350,
            'barcode' => '137843461313',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'curso.png'

        ]);
        Product::create([
            'name' => 'RUNNING NIKE',
            'cost' => 350,
            'price' => 500,
            'barcode' => '137843461313',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'tenis.png'

        ]);
        Product::create([
            'name' => 'IPHONE 13',
            'cost' => 2200,
            'price' => 2500,
            'barcode' => '137843461313',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'iphone13.png'

        ]);
        Product::create([
            'name' => 'PC GAMMER',
            'cost' => 2000,
            'price' => 2800,
            'barcode' => '137843461313',
            'stock' => 1000,
            'alerts' => 10,
            'category_id' => 1,
            'image' => 'pcgamer.png'

        ]);
    }
}
