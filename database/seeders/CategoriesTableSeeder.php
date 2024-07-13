<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $categories = [
//            [
//                'id'=>1,
//                'name'=>'Electronics'
//            ],
//            [
//                'id'=>2,
//                'name'=>'Home Appliances'
//            ],
//            [
//                'id'=>3,
//                'name'=>'Clothes'
//            ],
//            [
//                'id'=>4,
//                'name'=>'Kitchen wares'
//            ],
//            [
//                'id'=>5,
//                'name'=>'Phones'
//            ],
//            [
//                'id'=>6,
//                'name'=>'Garden wares'
//            ],
//            [
//                'id'=>7,
//                'name'=>'Computers'
//            ]
//
//        ];
//
//        Category::insert($categories);
        Category::factory(7)->create();
    }
}
