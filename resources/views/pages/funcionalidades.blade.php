@include("links")

<div id="cabecalho"></div>
<div class="ui centered container">
    <button class="ui labeled icon button" onclick="$('#nova-funcionalidade').modal('show')">
        <i class="plus icon"></i>
        Acrescentar funcionalidade
    </button>
    @include('components.modal-input')
</div>