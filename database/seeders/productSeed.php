<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            [
                'name'=>'Bus',
                'price'=>'564',
                'category'=>'cosmetic',
                'description'=>"the best ever shampoo.",
                'gallery'=>"https://upload.wikimedia.org/wikipedia/commons/6/63/LT_471_%28LTZ_1471%29_Arriva_London_New_Routemaster_%2819522859218%29.jpg"
            ],
            [
                'name'=>'Tavel Bus',
                'price'=>'564',
                'category'=>'electronic',
                'description'=>"the best ever shampoo.",
                'gallery'=>"https://upload.wikimedia.org/wikipedia/commons/thumb/7/7c/NEW_ADVENTURE_TRAVEL_-_Flickr_-_secret_coach_park_%281%29.jpg/800px-NEW_ADVENTURE_TRAVEL_-_Flickr_-_secret_coach_park_%281%29.jpg"
            ]

        ]);
    }
}
