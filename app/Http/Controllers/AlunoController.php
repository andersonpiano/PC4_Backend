<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aluno;

class AlunoController extends Controller
{
    public function index() {
        $alunos = aluno::orderby('id', 'desc')->paginate();
        return view('admin.alunos.index',['alunos' => $alunos]);
    }

    public function inserir() {
        return view('admin.alunos.inserir');
    }

    public function insert(Request $request){
        $aluno = new aluno();
        $aluno->nome = $request->nome;
        $aluno->telefone = $request->telefone;
        $aluno->email = $request->email;
        $aluno->nascimento = $request->nascimento;
        $aluno->genero = $request->genero;
        $aluno->save();
        return redirect()->route('alunos');
    }

    public function ver($id){
        $aluno = aluno::find($id);
        return view('admin.alunos.ver', ['aluno' => $aluno]);
    }

    public function edit(aluno $aluno){
        return view('admin.alunos.edit', ['aluno' => $aluno]);   
     }
 
 
    public function editar(Request $request, aluno $aluno){
        $aluno->nome = $request->nome;
        $aluno->telefone = $request->telefone;
        $aluno->email = $request->email;
        $aluno->nascimento = $request->nascimento;
        $aluno->genero = $request->genero;
        $aluno->save();
        return redirect()->route('alunos');
    }
    public function delete(aluno $aluno){
        $aluno->delete();
        return redirect()->route('alunos');
    }

    public function modal($id){
        $alunos = aluno::orderby('id', 'desc')->paginate();
        return view('admin.alunos.index', ['alunos' => $alunos, 'id' => $id]);

     }
}
