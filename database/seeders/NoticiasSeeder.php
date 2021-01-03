<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Noticia::factory(15)->create();
        
    }
}
