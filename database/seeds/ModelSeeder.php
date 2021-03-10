<?php

use App\Model;
use Illuminate\Database\Seeder;

class ModelSeeder extends Seeder
{
    public function run()
    {
        factory(Model::class, 25)->create();
    }
}
