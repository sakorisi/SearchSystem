<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReservesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        'from' => '客: 赤佐木',
        'to' => '店員: 山田',
        'datetime' => '5月25日　日曜日　19:00',
        'peoplenum' => '4人',
      ];
      DB::table('reserves')->insert($param);

      $param = [
        'from' => '客: 田中',
        'to' => '店員: マイケル',
        'datetime' => '5月26日　月曜日　18:00',
        'peoplenum' => '3人',
      ];
      DB::table('reserves')->insert($param);
    }
}
