<?php

use Illuminate\Database\Seeder;

class PaymentManagementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $payments = [
            ['payment_for' => 'dues', 'amount' => '100', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")]
        ];

        DB::table('payment_managements')->insert($payments);
    }
}
