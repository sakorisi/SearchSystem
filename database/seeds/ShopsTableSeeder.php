<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShopsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $param = [
          'name' => '井口家',
          'place_address' => '神奈川県川崎市多摩区東三田1丁目1-1',
          'lunchprice' => '500円',
          'dinnerprice' => '600円',
          'seatnum' => '15席',
          'open' =>'7:00',
          'close' =>'22:00',
          'average_stay_time' =>'14:00',
          'tag' => '便利！',
          'station' => '生田駅',
          'walk_mintue' => '10分',
        ];
        DB::table('shops')->insert($param);

        $param = [
          'name' => '青柳食堂',
          'place_address' => '神奈川県川崎市多摩区三田8丁目2-2',
          'lunchprice' => '800円',
          'dinnerprice' => '800円',
          'seatnum' => '30席',
          'open' =>'10:00',
          'close' =>'21:00',
          'average_stay_time' =>'19:00',
          'tag' => 'おばあちゃんの味',
          'station' => '生田駅',
          'walk_mintue' => '9分',
        ];
        DB::table('shops')->insert($param);
    }
}
