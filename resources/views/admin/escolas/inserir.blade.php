@extends('layouts.template')
@section('title', 'Inserir Movimentação Entrada/Saida')
@section('content')
<div class="container mt-4">
<form method="post" action="{{route('alunos.inserir_tabela')}}">
@csrf

<div class="row">
            <div class="col-md-6">
                <div class="form-group">
                  <label for="recurso_id">Recurso</label>
                    <select name="recurso_id" id="recurso_id" class="form-control text-center col-md-100">
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="quantidade">Quantidade</label>
                  <input type="number" class="form-control" id="quantidade" name="quantidade">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="tipo">Tipo</label>
                    <select id="tipo" name="tipo" type="select" class="form-control">
                        <option value="E">Entrada</option>
                        <option value="S">Saída</option>
                    </select>
                </div>
            </div>
        </div>
  <div class="form-group">
    <label for="responsavel">Responsavel</label>
    <input type="text" class="form-control" id="responsavel" name="responsavel">
  </div>
  <div class="form-group">
    <label for="observacao">Observação</label>
    <textarea class="form-control" id="observacao" name="observacao" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Cadastrar</button>
</form>
</div>
@endsection