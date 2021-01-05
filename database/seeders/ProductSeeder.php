<?php

namespace Database\Seeders;
//use DB;

//or
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('products')->insert([
                'title' => 'Apple iPhone 12 128 GB Blue',
                'price' => '32999',
                'category_id'=>'2',
                'code'=>'apple_iphone_12_128_gb_blue',
                'display_type'=>'OLED (Super Retina XDR)',
                'display_diagonal'=>'6.1',
                'sim'=>'2',
                'ram'=>'',
                'memory'=>'128 GB',
                'os'=>'iOS',
                'front_camera'=>'12',
                'camera'=>'12',
                'cpu'=>'Apple A14 Bionic',
                'bluetooth'=>'5.0',
                'image'=>'/images/apple_iphone_12_128_gb_blue.jpg'
            ]);
        }   

}
