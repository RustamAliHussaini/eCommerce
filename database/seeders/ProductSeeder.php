<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            [
                'name'=>"TV",
                'price'=>'200',
                'category'=>'ELECTRONIC',
                'description'=>"4GB Ram, 64 Hardisk"
            ]
            ,
            [
                'name'=>"PC",
                'price'=>'200',
                'category'=>'ELECTRONIC',
                'description'=>"4GB Ram, 64 Hardisk"
            ]
        ]);

    }
}
