<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\escola;

class EscolaController extends Controller
{
    public function index() {
        $escolas = escola::orderby('id', 'desc')->paginate();
        return view('admin.escolas.index',['escolas' => $escolas]);
    }

    public function inserir() {
        return view('admin.escolas.inserir');
    }

    public function insert(Request $request){
        $escola = new escola();
        $escola->nome = $request->nome;
        $escola->endereco = $request->endereco;
        $escola->save();
        return redirect()->route('escolas');
    }

    public function ver($id){
        $escola = escola::find($id);
        return view('admin.escolas.ver', ['escola' => $escola]);
    }

    public function edit(escola $escola){
        return view('admin.escolas.edit', ['escola' => $escola]);   
     }
 
 
    public function editar(Request $request, escola $escola){
        $escola->nome = $request->nome;
        $escola->endereco = $request->endereco;
        $escola->save();
        return redirect()->route('escolas');
    }
    public function delete(escola $escola){
        $escola->delete();
        return redirect()->route('escolas');
    }

    public function modal($id){
        $escolas = escola::orderby('id', 'desc')->paginate();
        return view('admin.escolas.index', ['escolas' => $escolas, 'id' => $id]);

     }
}
