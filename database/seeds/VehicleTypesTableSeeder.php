<?php

use Illuminate\Database\Seeder;

class VehicleTypesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $type = [
            ['vehicle_type' => 'Car', 'amount' => 200,  'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['vehicle_type' => 'Van', 'amount' => 300,  'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['vehicle_type' => 'Motorcycle', 'amount' => 150,  'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['vehicle_type' => 'Tricycle', 'amount' => 100,  'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
        ];

        DB::table('vehicle_types')->insert($type);
    }
}
