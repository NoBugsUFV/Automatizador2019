@include("links")
<head>
    <title> Gerar novo PESw </title>
<head>
<div id="cabecalho"></div>
<div class="ui centered container">
    <form action="/pesw/pdf" method="POST" target="_blank">
        @csrf
        <div class="ui labeled icon button" onclick="$('#nova-funcionalidade').modal('show')">
            <i class="plus icon"></i>
            Acrescentar funcionalidade
        </div>
        @include('components.modal-input')
        <table class="ui celled table">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Valor</th>
                    <th>Descrição</th>
                </tr>
            </thead>
            <tbody id="table">
            </tbody>
        <table>
        <div class="ui centered">
            <button class="ui labelled icon button" type="submit">
                <i class="paper icon"></i>
                Gerar PESw
            </button>
        </div>
    </form>
</div>