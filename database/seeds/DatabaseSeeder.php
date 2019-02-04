<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(MonthsTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PurposesTableSeeder::class);
        $this->call(RelationshipsTableSeeder::class);
        $this->call(PaymentManagementSeeder::class);
        $this->call(ReservationTypeSeeder::class);
        $this->call(PaymentsManagementSeeder::class);
       
    }
}
