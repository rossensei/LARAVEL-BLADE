<?php

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'category'=>'Milk',
                'description'=>'This is a Milk category.'
            ],
            [
                'category'=>'Shampoo',
                'description'=>'This is a shampoo category.'
            ],
            [
                'category'=>'Soap',
                'description'=>'This is a Soap category.'
            ],
        ];

        foreach($data as $categories) {
            \App\Category::create($categories);
        }
    }
}
