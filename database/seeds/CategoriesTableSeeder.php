<?php

use Illuminate\Database\Seeder;
use App\Category;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::insert(
            [
                [
                    'parent_id' => 0,
                    'name' => 'Makanan Berat'
                ],
                [
                    'parent_id' => 0,
                    'name' => 'Makanan Ringan'
                ],
                [
                    'parent_id' => 0,
                    'name' => 'Minuman Dingin'
                ],
                [
                    'parent_id' => 0,
                    'name' => 'Minuman Hangat'
                ]
            ]
        );
    }
}
