<?php

use Illuminate\Database\Seeder;

class PurposesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $purposes = 
        [
            ['purpose_name' => 'Petty Cash', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['purpose_name' => 'Electricity', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['purpose_name' => 'Water Bill', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['purpose_name' => 'PLDT', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['purpose_name' => 'Honorarium', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")]
        ];

        DB::table('purposes')->insert($purposes);
    }
}
