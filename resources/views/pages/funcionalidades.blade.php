@include("links")

<div id="cabecalho"></div>
<div class="ui centered container">
    <button class="ui labeled icon button" onclick="$('#nova-funcionalidade').modal('show')">
        <i class="plus icon"></i>
        Acrescentar funcionalidade
    </button>
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
</div>