<?php

use Illuminate\Database\Seeder;

class RelationshipsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $relationships = [
            ['relationship_name' => 'Mother', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['relationship_name' => 'Father', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['relationship_name' => 'Brother', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['relationship_name' => 'Sister', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['relationship_name' => 'Husband', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['relationship_name' => 'Wife', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['relationship_name' => 'Son', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['relationship_name' => 'Daughter', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['relationship_name' => 'Mother-in-law', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['relationship_name' => 'Father-in-law', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['relationship_name' => 'Brother-in-law', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
            ['relationship_name' => 'Sister-in-law', 'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s")],
        ];

        DB::table('relationships')->insert($relationships);     
    }
}
