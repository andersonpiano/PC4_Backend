<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\turma;

class TurmaController extends Controller
{
    public function index() {
        $turmas = turma::orderby('id', 'desc')->paginate();
        return view('admin.turmas.index',['turmas' => $turmas]);
    }

    public function inserir() {
        return view('admin.turmas.inserir');
    }

    public function insert(Request $request){
        $turma = new turma();
        $turma->nome = $request->nome;
        $turma->endereco = $request->endereco;
        $turma->save();
        return redirect()->route('turmas');
    }

    public function ver($id){
        $turma = turma::find($id);
        return view('admin.turmas.ver', ['turma' => $turma]);
    }

    public function edit(turma $turma){
        return view('admin.turmas.edit', ['turma' => $turma]);   
     }
 
 
    public function editar(Request $request, turma $turma){
        $turma->nome = $request->nome;
        $turma->endereco = $request->endereco;
        $turma->save();
        return redirect()->route('turmas');
    }
    public function delete(turma $turma){
        $turma->delete();
        return redirect()->route('turmas');
    }

    public function modal($id){
        $turmas = turma::orderby('id', 'desc')->paginate();
        return view('admin.turmas.index', ['turmas' => $turmas, 'id' => $id]);

     }
}
