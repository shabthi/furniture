<?php

use Illuminate\Database\Seeder;

class BedsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('beds')->insert([
            'type' => 'Living Room',
            'model' => 'LB500',
            'stock' => '20',
            'price' => 15000.00'
        ]);
        DB::table('beds')->insert([
            'type' => 'Bunk Bed',
            'model' => 'BB123',
            'stock' => '10',
            'price' => '20000.00'
        ]);
        DB::table('chairs')->insert([
            'type' => 'Four Poster Bed',
            'model' => 'FPB510',
            'stock' => '14',
            'price' => '18000.00'
        ]);
    }
}
