<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AutoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Autor::factory(5)->create();
    }
}
