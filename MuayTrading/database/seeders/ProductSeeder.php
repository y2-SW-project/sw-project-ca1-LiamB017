<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     $product_01 = new Product();
     $product_01->title = "Yokkao Shin Pads";
     $product_01->description = "Yokkao Shin Pads";
     $product_01->title = "Yokkao Shin Pads";
     $product_01->title = "Yokkao Shin Pads";
     $product_01->title = "Yokkao Shin Pads";
     $product_01->title = "Yokkao Shin Pads";
     $product_01->title = "Yokkao Shin Pads";
     $product_01->price = 29.99;
     $product_01->save();
}
}