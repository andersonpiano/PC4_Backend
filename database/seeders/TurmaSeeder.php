<?php

namespace Database\Seeders;

use App\Models\turma;
use Illuminate\Database\Seeder;

class TurmaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        turma::factory(10)->create();
    }
}
