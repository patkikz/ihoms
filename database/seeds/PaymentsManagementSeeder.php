<?php

use Illuminate\Database\Seeder;

class PaymentsManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $g = [
            ['payment_for' => 'dues', 'amount' => 100, 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")]
        ];


        DB::table('payment_managements')->insert($g);
    }
}
