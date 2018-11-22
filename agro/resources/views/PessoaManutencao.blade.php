@extends('ViewPadrao')
@section('content')
<br>
<div class="container">
    <div class="form-group">
        <label for="codigo">Código</label>
        <input style="width: 250px;" type="text" class="form-control" id="codigo" name="codigo" >
    </div>
    <div class="form-group">
        <label for="nome">Nome</label>
        <input style="width: 400px;" type="text" class="form-control" id="nome" name="nome" >
    </div>
    <div class="form-group">
        <label for="idade">Idade</label>
        <input style="width: 400px;" type="text" class="form-control" id="idade" name="idade" >
    </div>
    <div class="form-group">
        <label for="cpf">Cpf</label>
        <input style="width: 400px;" type="text" class="form-control" id="cpf" name="cpf" >
    </div>
    <div class="form-group">
        <label for="telefone">Telefone</label>
        <input style="width: 400px;" type="text" class="form-control" id="telefone" name="telefone" >
    </div>
    <div class="form-group">
        <button type="submit" id="confirmar" onclick='adicionar();' class="btn btn-primary">Confirmar</button>
        <button type="reset" class="btn btn-danger">Limpar</button>
    </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript" src="/js/Pessoa.js"></script>
@endsection