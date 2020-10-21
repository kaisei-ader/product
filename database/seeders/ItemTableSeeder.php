<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ItemTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            'product_name' => 'コーラ',
            'arrival_source' => '入荷株式会社1',
            'manufacturer' => '製造株式会社1',
            'price' => '200',
        ]);
        DB::table('items')->insert([
            'product_name' => 'ラムネ',
            'arrival_source' => '入荷株式会社2',
            'manufacturer' => '製造株式会社2',
            'price' => '100',
        ]);
    }
}
