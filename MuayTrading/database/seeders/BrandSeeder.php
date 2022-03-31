<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $brand_01 = new Brand();
        $brand_01->title = "yakkao";
        $brand_01->save();

        $brand_02 = new Brand();
        $brand_02->title = "everlast";
        $brand_02->save();

        $brand_03 = new Brand();
        $brand_03->title = "sandee";
        $brand_03->save();

        $brand_04 = new Brand();
        $brand_04->title = "fairtex ";
        $brand_04->save();

        $brand_05 = new Brand();
        $brand_05->title = "venum";
        $brand_05->save();

        $brand_06 = new Brand();
        $brand_06->title = "twins";
        $brand_06->save();
    }
}
