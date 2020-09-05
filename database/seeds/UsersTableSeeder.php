<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        [
            'name' => '管理者',
            'email' => 'test@example.com',
            'password' => Hash::make('passwords0000'),
            'job' => 'test',
            'hobby' => 'test',
            'message' => 'test',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        [
            'name' => '管理者2',
            'email' => 'test2@example.com',
            'password' => Hash::make('passwords0000'),
            'job' => 'test2',
            'hobby' => 'test2',
            'message' => 'test2',
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
        ],
        ]);
    }
}
