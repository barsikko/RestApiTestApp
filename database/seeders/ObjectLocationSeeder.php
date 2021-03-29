<?php

namespace Database\Seeders;

use App\Models\ObjectLocation;
use Illuminate\Database\Seeder;

class ObjectLocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ObjectLocation::factory()->make();
    }
}
