<?php

namespace Database\Seeders;

use App\Models\aluno;
use Illuminate\Database\Seeder;


class AlunoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        aluno::factory(10)->create();
    }
}
