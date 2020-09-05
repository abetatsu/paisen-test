<?php

use Illuminate\Database\Seeder;

class SeniorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('seniors')->insert([
            [
                'user_id' => 1,
                'name' => '安倍晋三',
                'age' => 65,
                'home_country' => '東京都',
                'previous_job' => 'IT・情報通信業',
                'hobby' => 'ゴルフ',
                'need_person' => '楽しくお話できる方',
                'message' => '楽しいひと時を過ごしましょう',
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => 2,
                'name' => 'アーノルド・シュワルツネガー',
                'age' => 74,
                'home_country' => '海外',
                'previous_job' => '法人団体',
                'hobby' => '筋トレ',
                'need_person' => '筋トレ好きの方',
                'message' => "I'll be back",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],
            [
                'user_id' => 1,
                'name' => 'スティーブン・セガール',
                'age' => 66,
                'home_country' => '石川県',
                'previous_job' => 'サービス業',
                'hobby' => '合気道',
                'need_person' => '合気道好きの方',
                'message' => "沈黙の達人。。。",
                'created_at' => new DateTime(),
                'updated_at' => new DateTime(),
            ],

        ]);
    }
}
