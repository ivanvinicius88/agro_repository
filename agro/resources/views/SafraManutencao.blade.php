@extends('ViewPadrao')
@section('content')
<br>
<div class="container">
    <div class="form-group">
        <label for="pessoa">Pessoa</label>
        <input style="width: 250px;" type="text" class="form-control" id="pessoa" name="pessoa" >
    </div>
    <div class="form-group">
        <label for="lavoura">Lavoura</label>
        <input style="width: 400px;" type="text" class="form-control" id="lavoura" name="lavoura" >
    </div>
    <div class="form-group">
        <label for="maquinario">Maquinario</label>
        <input style="width: 400px;" type="text" class="form-control" id="maquinario" name="maquinario" >
    </div>
    <div class="form-group">
        <label for="codigo">Código</label>
        <input style="width: 400px;" type="text" class="form-control" id="codigo" name="codigo" >
    </div>
    <div class="form-group">
        <label for="descricao">Descricao</label>
        <input style="width: 400px;" type="text" class="form-control" id="descricao" name="descricao" >
    </div>
    <div class="form-group">
        <label for="ano">Ano</label>
        <input style="width: 400px;" type="text" class="form-control" id="ano" name="ano" >
    </div>
    <div class="form-group">
        <button type="submit" id="confirmar" onclick='adicionar();' class="btn btn-primary">Confirmar</button>
        <button type="reset" class="btn btn-danger">Limpar</button>
    </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript" src="/js/Safra.js"></script>
@endsection