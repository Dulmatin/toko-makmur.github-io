<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       	Product::insert(
       		[
       			[
       				'name' => 'ember' , 
       				'unit_id' => '1' ,
       				'category_id' => '1' ,
       				'stock' => '10' ,
       				'purchase_price' => '1000' ,
       				'sell_price' => '1500' ,
       				'image' => 'exsample'
       			],
       			[
       				'name' => 'panci' , 
       				'unit_id' => '1' ,
       				'category_id' => '1' ,
       				'stock' => '10' ,
       				'purchase_price' => '2000' ,
       				'sell_price' => '3000' ,
       				'image' => 'exsample'
       			],
       			[
       				'name' => 'sodet' , 
       				'unit_id' => '1' ,
       				'categori_id' => '1' ,
       				'stok' => '10' ,
       				'purchase_price' => '1500' ,
       				'sell_price' => '2000' ,
       				'image' => 'exsample'
       			]
       		]
       	);
    }
}
