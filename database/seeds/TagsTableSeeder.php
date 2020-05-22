<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $param = [
        'name' => '安い、早い'
      ];
      DB::table('tags')->insert($param);

      $param = [
        'name' => 'とてもおいしい、高い'
      ];
      DB::table('tags')->insert($param);
    }


}
