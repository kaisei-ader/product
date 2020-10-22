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
            'product_name' => 'バナナ',
            'arrival_source' => '入荷株式会11',
            'manufacturer' => '製造株式会社11',
            'price' => '500',
        ]);
        DB::table('items')->insert([
            'product_name' => 'イチゴ',
            'arrival_source' => '入荷株式会社12',
            'manufacturer' => '製造株式会社12',
            'price' => '320',
        ]);
        DB::table('items')->insert([
            'product_name' => 'ぶどう',
            'arrival_source' => '入荷株式会社13',
            'manufacturer' => '製造株式会社13',
            'price' => '900',
        ]);
        DB::table('items')->insert([
            'product_name' => 'スイカ',
            'arrival_source' => '入荷株式会社14',
            'manufacturer' => '製造株式会社14',
            'price' => '600',
        ]);
    }
}
