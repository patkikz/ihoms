<?php

use Illuminate\Database\Seeder;

class CivilStatusesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $c = [
            ['civil_status' => 'Single', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['civil_status' => 'Married', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['civil_status' => 'Widowed', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['civil_status' => 'Divorced', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['civil_status' => 'Separated', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
        ];

        DB::table('civil_statuses')->insert($c);
    }
}
