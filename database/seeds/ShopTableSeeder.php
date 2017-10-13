<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class ShopTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Shop::create([
            'name' => 'Periperi Shop A',
            'alias' => 'Shop A',
            'address' => 'nottingham'
        ]);
 
        App\Shop::create([
            'name' => 'Periperi Shop B',
            'alias' => 'Shop B',
            'address' => 'nottingham'
        ]);
    }
}
