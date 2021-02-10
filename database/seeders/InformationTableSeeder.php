<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class InformationTableSeeder extends Seeder
{
    public function run()
    {
        //飲食店ダミーデータ
        $param = [
            'user_id' => '1',
            'store_name' => 'サイゼリヤ1',
            'rural_code' => '北海道',
            'area' => '札幌',
            'photo_pass' => 'storage/productimage/FMsHZDLHycY4ruSOqGQb7yKp4NTV9HmM94wgZDda.jpeg',
            'store_stype' => '飲食店',
            'store_information' => 'ミラノ風ドリア100円',
            'street_address' => '北海道 札幌市 白石区 菊水 ４条 １丁目',
            'url' => 'https://www.saizeriya.com',
            'religion' => 'なし',
            'allergies' => 'えび,かに,いか,いくら,さけ,さば',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        
        $param = [
            'user_id' => '2',
            'store_name' => 'サイゼリヤ2',
            'rural_code' => '北海道',
            'area' => '札幌',
            'photo_pass' => 'storage/productimage/FMsHZDLHycY4ruSOqGQb7yKp4NTV9HmM94wgZDda.jpeg',
            'store_stype' => '飲食店',
            'store_information' => 'ミラノ風ドリア100円',
            'street_address' => '北海道 札幌市 白石区 菊水 ４条 2丁目',
            'url' => 'https://www.saizeriya.com',
            'religion' => 'なし',
            'allergies' => 'えび,かに,いか,いくら,さけ,さば',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        $param = [
            'user_id' => '3',
            'store_name' => 'サイゼリヤ3',
            'rural_code' => '北海道',
            'area' => '札幌',
            'photo_pass' => 'storage/productimage/FMsHZDLHycY4ruSOqGQb7yKp4NTV9HmM94wgZDda.jpeg',
            'store_stype' => '飲食店',
            'store_information' => 'ミラノ風ドリア100円',
            'street_address' => '北海道 札幌市 白石区 菊水 ４条 3丁目',
            'url' => 'https://www.saizeriya.com',
            'religion' => 'なし',
            'allergies' => 'えび,かに,いか,いくら,さけ,さば',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        $param = [
            'user_id' => '4',
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
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        $param = [
            'user_id' => '5',
            'store_name' => 'ガスト',
            'rural_code' => '岩手県',
            'area' => '盛岡',
            'photo_pass' => 'storage/productimage/FMsHZDLHycY4ruSOqGQb7yKp4NTV9HmM94wgZDda.jpeg',
            'store_stype' => '飲食店',
            'store_information' => 'ミックスグリル 100円',
            'street_address' => '岩手県　盛岡市　２－２－２',
            'url' => 'https://www.ba-miyann.com',
            'religion' => 'なし',
            'allergies' => '卵',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        //宿泊ダミーデータ
        $param = [
            'user_id' => '6',
            'store_name' => 'カプセルホテル１',
            'rural_code' => '北海道',
            'area' => '札幌',
            'photo_pass' => 'storage/temp/Nw4hLc8nnlDQtkhAf8SBahuqEpDvGdK9oTlOhkFa.png',
            'store_stype' => '宿泊',
            'store_information' => '一泊一部屋5000円',
            'street_address' => '北海道 札幌市 白石区 菊水 ４条 １丁目',
            'url' => 'https://www.bizinesu.com',
            'religion' => 'なし',
            'allergies' => 'なし',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        
        $param = [
            'user_id' => '7',
            'store_name' => 'カプセルホテル７',
            'rural_code' => '北海道',
            'area' => '札幌',
            'photo_pass' => 'storage/temp/Nw4hLc8nnlDQtkhAf8SBahuqEpDvGdK9oTlOhkFa.png',
            'store_stype' => '宿泊',
            'store_information' => '一泊一部屋5000円',
            'street_address' => '北海道 札幌市 白石区 菊水 ４条 2丁目',
            'url' => 'https://www.bizinesu.com',
            'religion' => 'なし',
            'allergies' => 'なし',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        $param = [
            'user_id' => '８',
            'store_name' => 'ビジネスホテル８',
            'rural_code' => '北海道',
            'area' => '札幌',
            'photo_pass' => 'storage/temp/Nw4hLc8nnlDQtkhAf8SBahuqEpDvGdK9oTlOhkFa.png',
            'store_stype' => '宿泊',
            'store_information' => '一泊一部屋5000円',
            'street_address' => '北海道 札幌市 白石区 菊水 ４条 3丁目',
            'url' => 'https://www.bizinesu.com',
            'religion' => 'なし',
            'allergies' => 'なし',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        $param = [
            'user_id' => '９',
            'store_name' => 'リゾートホテル',
            'rural_code' => '青森県',
            'area' => '津軽半島',
            'photo_pass' => 'storage/temp/Nw4hLc8nnlDQtkhAf8SBahuqEpDvGdK9oTlOhkFa.png',
            'store_stype' => '宿泊',
            'store_information' => '一泊一部屋10000円',
            'street_address' => '青森県　津軽半島　１－１－１',
            'url' => 'https://www.rizo-to.com',
            'religion' => 'なし',
            'allergies' => 'なし',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        $param = [
            'user_id' => '１０',
            'store_name' => 'グランドホテル',
            'rural_code' => '岩手県',
            'area' => '盛岡',
            'photo_pass' => 'storage/temp/Nw4hLc8nnlDQtkhAf8SBahuqEpDvGdK9oTlOhkFa.png',
            'store_stype' => '宿泊',
            'store_information' => '一泊一部屋100万円',
            'street_address' => '岩手県　盛岡市　２－２－２',
            'url' => 'https://www.gurando.com',
            'religion' => 'なし',
            'allergies' => 'なし',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        //観光ダミーデータ
        $param = [
            'user_id' => '１１',
            'store_name' => '札幌市時計台１',
            'rural_code' => '北海道',
            'area' => '札幌',
            'photo_pass' => 'storage/temp/n9IEIuOKiTr2jcMXFh0oyRBITv3K5eJTws8N7PqN.jpeg',
            'store_stype' => '観光地',
            'store_information' => '高校生以下無料',
            'street_address' => '北海道 札幌市 白石区 菊水 ４条 １丁目',
            'url' => 'https://www.tokei.com',
            'religion' => 'なし',
            'allergies' => 'なし',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        $param = [
            'user_id' => '１２',
            'store_name' => '札幌市時計台２',
            'rural_code' => '北海道',
            'area' => '札幌',
            'photo_pass' => 'storage/temp/n9IEIuOKiTr2jcMXFh0oyRBITv3K5eJTws8N7PqN.jpeg',
            'store_stype' => '観光地',
            'store_information' => '高校生以下無料',
            'street_address' => '北海道 札幌市 白石区 菊水 ４条 ２丁目',
            'url' => 'https://www.tokei.com',
            'religion' => 'なし',
            'allergies' => 'なし',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        $param = [
            'user_id' => '１３',
            'store_name' => '札幌市時計台３',
            'rural_code' => '北海道',
            'area' => '札幌',
            'photo_pass' => 'storage/temp/n9IEIuOKiTr2jcMXFh0oyRBITv3K5eJTws8N7PqN.jpeg',
            'store_stype' => '観光地',
            'store_information' => '高校生以下無料',
            'street_address' => '北海道 札幌市 白石区 菊水 ４条 ３丁目',
            'url' => 'https://www.tokei.com',
            'religion' => 'なし',
            'allergies' => 'なし',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        $param = [
            'user_id' => '１４',
            'store_name' => '札幌市円山動物園',
            'rural_code' => '北海道',
            'area' => '函館',
            'photo_pass' => 'storage/temp/liUkH0YjzyojS520Vs3tIyRd6Mb1kFGn8ZDpThwo.jpeg',
            'store_stype' => '観光地',
            'store_information' => '高校生以下無料',
            'street_address' => '北海道 函館市 白石区 菊水 ４条 4丁目',
            'url' => 'https://www.doubutu.com',
            'religion' => 'なし',
            'allergies' => 'なし',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);

        $param = [
            'user_id' => '１5',
            'store_name' => '白い恋人パーク',
            'rural_code' => '北海道',
            'area' => '稚内',
            'photo_pass' => 'storage/temp/y1LNryJD4BqyjKUTlLKuZ9CB4sqe3BEautRiW8Q1.jpeg',
            'store_stype' => '観光地',
            'store_information' => '高校生以下無料',
            'street_address' => '北海道 札幌市 白石区 菊水 ４条 ５丁目',
            'url' => 'https://www.koibito.com',
            'religion' => 'なし',
            'allergies' => 'なし',
            'store_introduction' => 'よろしくお願いいたします。',
            'flag' => '1',
        ];
        DB::table('information')->insert($param);
    }
}