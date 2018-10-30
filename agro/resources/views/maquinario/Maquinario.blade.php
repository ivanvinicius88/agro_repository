
@extends('MaquinarioPadrao')

@section('content')
<div class='container'>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <thead>
                <th>Código</th>
                <th>Nome</th>
                <th>Ano</th>
                <th>Valor</th>
                <th>Ações</th>
            </thead>
        </tr>
        </thead>
        <tbody id="tabela"></tbody>
    </table>
</div>
@endsection

@section('javascript')
<script type="text/javascript" src="js/Maquinario.js"></script>
@endsection