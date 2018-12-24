<script type="text/javascript" src="{{ URL::asset('js/funcionalidades.js')}}"></script>

<script type="text/javascript">
    $(document).ready(function(e){
        appendTable(@json($funcionalidades[0]))
        appendTable(@json($funcionalidades[2]))
        let temp = JSON.parse($("#funcionalidades").val())
        $("#funcionalidades").val(JSON.stringify([@json($funcionalidades[0]),...temp]))
        temp = JSON.parse($("#funcionalidades").val())
        $("#funcionalidades").val(JSON.stringify([@json($funcionalidades[2]),...temp]))
    })
</script>

<div id="nova-funcionalidade" class="ui tiny modal">
    <div class="header">
        Inserir funcionalidade
    </div>
    <div class="centered scrolling content ui form">
        <div class="ui form">
            <div class="ui field">
                <label>Tipo</label>
                <select id="select-funcionalidade" onselect="preencheFuncionalidade(); return false;">
                    @foreach( $funcionalidades as $opcao)
                        @if($opcao->id != 1 && $opcao->id != 3)
                            <option value="{{$opcao}}"> {{ $opcao->nome }} </option>
                        @endif                            
                    @endforeach
                </select>
            </div>
            <div class="ui field">
                <button class="ui icon button" onclick="preencheFuncionalidade()">
                    <i class="arrow down icon"></i>
                    Completar
                </button>
            </div>
            <input hidden id="id-funcionalidade" type="number"/>
            <div class="ui field focus">
                <label>Nome</label>
                <input id="nome-funcionalidade" placeholder="Nome da funcionalidade"/>
            </div>
            <div class="ui field">
                <label>Descrição</label>
                <textarea id="descricao-funcionalidade" rows=3></textarea>
            </div>
            <div class="ui field focus">
                    <label>Preço</label>
                    <input id="valor-funcionalidade" type="number" step="any" placeholder="Preço da funcionalidade"/>
                </div>
        </div>
    </div>
    <div class="actions">
        <button class="ui red button" onclick="$('#nova-funcionalidade').modal('hide')">Fechar</button>
        <button class="ui green button" onclick="addFuncionalidade()">Adicionar</button>
    </div>
</div>