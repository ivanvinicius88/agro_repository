
@extends('ViewPadrao')

@section('content')
<div class='container'>
    <table class="table table-bordered table-striped">
        <thead>
        <tr>
            <thead>
                <th>Código</th>
                <th>Nome</th>
                <th>Idade</th>
                <th>Cpf</th>
                <th>Telefone</th>
                <th>Ações</th>
            </thead>
        </tr>
        </thead>
        <tbody id="tabela"></tbody>
    </table>
</div>
@endsection

@section('javascript')
<script type="text/javascript" src="/js/Pessoa.js"></script>
@endsection