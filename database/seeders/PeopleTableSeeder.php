<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PeopleTableSeeder extends Seeder
{
    public function run()
    {
        $param = [
            'user_id' => '1',
            'store_name' => 'サイゼリヤ',
            'rural_code' => '北海道',
            'area' => '札幌',
            'photo_pass' => 'storage/productimage/5j7c68fEkQb2TNMYqelq18VfezE93rXqK77RzSf0.png',
            'store_stype' => '飲食店',
            'store_information' => 'ミラノ風ドリア100円',
            'street_address' => '北海道 札幌市 白石区 菊水 ４条 １丁目',
            'url' => 'https://www.saizeriya.com',
            'religion' => 'なし',
            'allergies' => 'えび,かに,いか,いくら,さけ,さば',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '0',
        ];
        DB::table('information')->insert($param);

        $param = [
            'user_id' => '2',
            'store_name' => 'バーミヤン',
            'rural_code' => '青森県',
            'area' => '津軽半島',
            'photo_pass' => 'storage/productimage/2yP6RyEHVHGzXrTyBNhXEwGWEjwyfUNTa9LWsp2T.jpeg',
            'store_stype' => '飲食店',
            'store_information' => 'チーズINハンバーグ 100円',
            'street_address' => '青森県　津軽半島　１－１－１',
            'url' => 'https://www.ba-miyann.com',
            'religion' => 'なし',
            'allergies' => '卵',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '0',
        ];
        DB::table('information')->insert($param);

        $param = [
            'user_id' => '3',
            'store_name' => 'ガスト',
            'rural_code' => '岩手県',
            'area' => '盛岡市',
            'photo_pass' => 'storage/productimage/FMsHZDLHycY4ruSOqGQb7yKp4NTV9HmM94wgZDda.jpeg',
            'store_stype' => '飲食店',
            'store_information' => 'ミックスグリル 100円',
            'street_address' => '岩手県　盛岡市　２－２－２',
            'url' => 'https://www.ba-miyann.com',
            'religion' => 'なし',
            'allergies' => '卵',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '0',
        ];
        DB::table('information')->insert($param);
    }
}