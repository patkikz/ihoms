<?php

use Illuminate\Database\Seeder;

class ReservationTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $types = [
            ['reservation_type' => 'Birthday', 'amount' => 300, 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['reservation_type' => 'Christening', 'amount' => 500, 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['reservation_type' => 'Reunion', 'amount' => 1000, 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
        ];

        DB::table('reservation_types')->insert($types);
    }
}
