
@extends('ViewPadrao')

@section('content')
<div class='container'>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <thead>
                <th>Pessoa</th>
                <th>Lavoura</th>
                <th>Maquina</th>
                <th>Safra</th>
                <th>Descrição</th>
                <th>Ano</th>
                <th>Ações</th>
            </thead>
        </tr>
        </thead>
        <tbody id="tabela"></tbody>
    </table>
</div>
@endsection

@section('javascript')
<script type="text/javascript" src="/js/Safra.js"></script>
@endsection