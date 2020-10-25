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
            'user_id' =>'1',
            'product_name' => 'バナナ',
            'arrival_source' => '入荷株式会11',
            'manufacturer' => '製造株式会社11',
            'price' => '500',
        ]);
    }
}
