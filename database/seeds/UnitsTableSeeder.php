<?php

use Illuminate\Database\Seeder;
use App\Unit;

class UnitsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Unit::insert([
            [
                'name' =>'BOX'
            ],
            [
                'name' =>'BOTOL'
            ],
            [
                'name' =>'LUSIN'
            ]
        ]);
    }
}
