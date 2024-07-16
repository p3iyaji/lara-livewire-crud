<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
//        $users = [
//            [
//                'id'=>1,
//                'name'=>'Admin',
//                'email'=>'xyz@example.com',
//                'password'=>bcrypt('hunter123'),
//                'remember_token'=> null,
//            ],
//            [
//                'id'=>2,
//                'name'=>'User',
//                'email'=>'abc@example.com',
//                'password'=>bcrypt('hunter123'),
//                'remember_token'=> null,
//            ],
//            [
//                'id'=>3,
//                'name'=>'John Doe',
//                'email'=>'jd@example.com',
//                'password'=>bcrypt('hunter123'),
//                'remember_token'=> null,
//            ],
//            [
//                'id'=>4,
//                'name'=>'John Paul',
//                'email'=>'jp@example.com',
//                'password'=>bcrypt('hunter123'),
//                'remember_token'=> null,
//            ],
//            [
//                'id'=>5,
//                'name'=>'John Steven',
//                'email'=>'js@example.com',
//                'password'=>bcrypt('hunter123'),
//                'remember_token'=> null,
//            ],
//            [
//                'id'=>6,
//                'name'=>'John Jeffery',
//                'email'=>'jj@example.com',
//                'password'=>bcrypt('hunter123'),
//                'remember_token'=> null,
//            ],
//            [
//                'id'=>7,
//                'name'=>'John Goethe',
//                'email'=>'jg@example.com',
//                'password'=>bcrypt('hunter123'),
//                'remember_token'=> null,
//            ],
//        ];

        //User::insert($users);
        User::factory(20)->create();
    }
}
