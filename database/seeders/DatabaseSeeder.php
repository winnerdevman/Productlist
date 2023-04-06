<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        for ($i = 0; $i < 20; $i++){
         \App\Models\User::factory()->create([
             'name' => "Test User {$i}",
             'email' => "test{$i}@gmail.com",
             'password'=> sha1("testuser"),
             'age'=> 15 + $i * 2
         ]);
        }

        for ($i = 1; $i <= 5; $i++){
            \App\Models\Category::create([
                'name' => "Category {$i}",
            ]);
        }

        for ($i = 1; $i <= 5; $i++){
            for ($j = 1; $j <=5; $j++){
                \App\Models\Product::create([
                    'name' => "Product {$i}_{$j}",
                    'category_id'=> $i,
                    'decription'=> "Description {$i} {$j}",
                    'price'=> $i * $j
                ]);
            }
        }
    }
}
