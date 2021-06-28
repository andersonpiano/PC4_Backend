<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddAlunoIdToId extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('alunos_turmas', function (Blueprint $table) {
            $table->foreignId('aluno_id')->after('id');
            $table->foreign('aluno_id')->references('id')->on('alunos');
            $table->foreignId('turma_id')->after('aluno_id');
            $table->foreign('turma_id')->references('id')->on('turmas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('alunos_turmas', function (Blueprint $table) {
            $table->dropForeign('alunos_turmas_aluno_id_foreign');
            $table->dropColumn('aluno_id');
            $table->dropForeign('alunos_turmas_turma_id_foreign');
            $table->dropColumn('turma_id');

        });
    }
}
