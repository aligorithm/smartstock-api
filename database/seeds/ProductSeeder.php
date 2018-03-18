<?php

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
        DB::table('products')->insert([
            'name' => str_random(6),
            'description' => str_random(10),
            'code' => str_random(10),
            'brand_id' => 1,
            'category_id' => 1
        ]);
    }
}
