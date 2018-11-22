@extends('ViewPadrao')
@section('content')
<br>
<div class="container">
    <div class="form-group">
        <label for="codigo">Código</label>
        <input style="width: 250px;" type="text" class="form-control" id="codigo" name="codigo" >
    </div>
    <div class="form-group">
        <label for="descricao">Descrição</label>
        <input style="width: 400px;" type="text" class="form-control" id="descricao" name="descricao" >
    </div>
    <div class="form-group">
        <button type="submit" id="confirmar" onclick='adicionar();' class="btn btn-primary">Confirmar</button>
        <button type="reset" class="btn btn-danger">Limpar</button>
    </div>
</div>
@endsection
@section('javascript')
<script type="text/javascript" src="/js/Lavoura.js"></script>
@endsection