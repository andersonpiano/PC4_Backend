@extends('layouts.template')
@section('title', 'Editar aluno')
@section('content')
<div class="container mt-4">
<form method="POST" action="{{route('alunos.editar', $aluno)}}">
@csrf
@method('put')
<div class="row">
            <div class="col-md-9">
                <div class="form-group">
                  <label for="nome">Nome</label>
                  <input type="text" class="form-control" id="nome" name="nome" value="{{$aluno->nome}}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="email">Telefone</label>
                  <input type="text" class="form-control" id="telefone" name="telefone" value="{{$aluno->telefone}}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" class="form-control" id="email" name="email" value="{{$aluno->email}}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="email">Data de Nascimento</label>
                  <input type="date" class="form-control" id="nascimento" name="nascimento" value="{{$aluno->nascimento}}">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                  <label for="email">Genero</label>
                  <input type="text" class="form-control" id="genero" name="genero" value="{{$aluno->genero}}">
                </div>
            </div>
        </div>
  <button id="salvar" type="submit" class="btn btn-primary">Salvar</button>
</form>
</div>
@endsection