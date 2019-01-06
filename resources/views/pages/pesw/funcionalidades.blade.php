@include("links")
<head>
    <title> Gerar novo PESw </title>
<head>
<div id="cabecalho"></div>
<div class="ui centered container">
    <form action="/pesw/pdf" method="POST" target="_blank">
        @csrf
        <input type="hidden" name="funcionalidades" id="funcionalidades" value="[]"/>
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
        <div class="ui form">
            <div class="three fields">
                <div class="ui field">
                    <label> Cliente </label>
                    <input id="cliente" name="cliente" type="text" placeholder="Nome do cliente"/>
                </div>
                <div class="ui field">
                    <label> Data </label>
                    <input id="data" name="data" type="date" value="{{ date("Y-m-d")}}"/>
                </div>
                <div class="ui field">
                    <label> Validade (em dias) </label>
                    <input id="validade" name="validade" type="number" value="7"/>
                </div>
            </div>
            <div class="ui field">
                <label> Visão Geral do Produto </label>
                <textarea rows="5" id="visao" name="visao" type="text" 
                    placeholder="Escreva aqui a visão geral do Produto"></textarea>
            </div>
            <div class="ui centered">
                <button class="ui labelled icon button" type="submit">
                    <i class="paper icon"></i>
                    Gerar PESw
                </button>
            </div>
        </div>
    </form>
</div>