<?php

use Illuminate\Database\Seeder;

class LeavesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('type_of_leaves')->insert([
            [
                'id' => 1,
                'name' => 'medical',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id' => 2,
                'name' => 'annual',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
