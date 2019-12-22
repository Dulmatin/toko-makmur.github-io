<?php

use Illuminate\Database\Seeder;
use App\Customer;

class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::insert(
            [
                [ 
                    'name' => 'Dulhafi',
                    'phone_number' => '089682599815',
                    'username' => 'Dulhafi97',
                    'email' => 'dulhafi19@gmail.com',
                    'gender' => 'laki-laki',
                    'address' => 'cicurug',
                    'password' =>Hash ::make('MANTAP')

                ]
            ]
        );
    }
}
