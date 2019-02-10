<?php

use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genders = [
            ['gender' => 'Male','created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['gender' => 'Female','created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['gender' => 'Prefer Not To Say','created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
        ];

        DB::table('genders')->insert($genders);
    }
}
