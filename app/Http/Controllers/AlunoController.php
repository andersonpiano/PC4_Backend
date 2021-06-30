<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aluno;
use Carbon\Carbon;
use DataTables;

class AlunoController extends Controller
{
    public function index(Request $request) {
        //$alunos = aluno::orderby('id', 'desc')->paginate();
        if ($request->ajax()) {
            $alunos = aluno::select('*');
            return Datatables::of($alunos)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
     
                           $btn = '<a title="editar" href="'.route('alunos.edit', $row->id).'"><i class="fas fa-edit text-info mr-1"></i></a>';
                           $btn .= '<a title="editar" href="'.route('alunos.modal', $row->id).'"><i class="fas fa-times text-danger mr-1"></i></a>';
                        
    
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
        return view('admin.alunos.index');
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
