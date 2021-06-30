@extends('layouts.template')
@section('title', 'Gerenciamento de aluno')
@section('content')
<?php 
if(!isset($id)){
    $id = ""; 
  }
?>  
<div class="container">
<a href="{{route('alunos.inserir')}}" type="button" class="mt-4 mb-4 btn btn-primary">Cadastrar Aluno</a>
<div class="card shadow mb-4">

<div class="card-body">
  <div class="table-responsive">
    <table class="table table-bordered data-table">
      <thead>
        <tr class="text-center">
          <th>ID</th>
          <th>Nome</th>
          <th>Telefone</th>
          <th>Email</th>
          <th>Data de Nascimento</th>
          <th>Gênero</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
      </tbody>
  </table>
</div>
</div>
</div>

</div>

<script type="text/javascript">

  $(function () {
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('alunos') }}",
        columns: [
            {data: 'id', name: 'id'},
            {data: 'nome', name: 'nome'},
            {data: 'telefone', name: 'telefone'},
            {data: 'email', name: 'email'},
            {data: 'nascimento', name: 'nascimento'},
            {data: 'genero', name: 'genero'},
            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
    });
  });
</script>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Deletar Registro</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Deseja Realmente Excluir este Registro?
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form method="POST" action="">
          @csrf
          @method('delete')
          <button type="submit" class="btn btn-danger">Excluir</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?php 
if(@$id != ""){
  echo "<script>$('#exampleModal').modal('show');</script>";
}
?>
@endsection