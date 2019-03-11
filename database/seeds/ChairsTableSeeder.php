<?php

use Illuminate\Database\Seeder;

class ChairsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('chairs')->insert([
            'type' => 'office',
            'model' => 'OC500',
            'stock' => '20',
            'price' => '7500.00'
        ]);
        DB::table('chairs')->insert([
            'type' => 'dining-wood',
            'model' => 'DWC123',
            'stock' => '10',
            'price' => '5500.00'
        ]);
        DB::table('chairs')->insert([
            'type' => 'dining-metal',
            'model' => 'DMC510',
            'stock' => '14',
            'price' => '9500.00'
        ]);
    }
}
