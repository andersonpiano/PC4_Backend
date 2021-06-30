<?php

namespace Database\Seeders;

use App\Models\escola;
use Illuminate\Database\Seeder;

class EscolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        escola::factory(10)->create();
    }
}
