<script lang="javascript">
    function preencheFuncionalidade(){
        const opcao = JSON.parse($("#select-funcionalidade").val())
        $('#id-funcionalidade').val(opcao.id)
        $('#nome-funcionalidade').val(opcao.nome)
        $('#descricao-funcionalidade').val(opcao.descricao)
        $('#preco-funcionalidade').val(opcao.valor)
    }

    function addFuncionalidade(){
        let temp = JSON.parse($("#funcionalidades").val())
        const novaFunc = {
            nome: $('#nome-funcionalidade').val(),
            descricao: $('#descricao-funcionalidade').val(),
            preco: $('#preco-funcionalidade').val()
        }
        $("#funcionalidades").val(JSON.stringify([novaFunc,...temp]))
        $("#table").append(`
           <tr>
                <td> ${novaFunc.nome} </td>
                <td> ${novaFunc.preco} </td>
                <td> ${novaFunc.descricao} </td>
           </tr>
        `)
        $("#nova-funcionalidade").modal("hide")
    }
</script>

<div id="nova-funcionalidade" class="ui tiny modal">
    <div class="header">
        Inserir funcionalidade
    </div>
    <div class="centered scrolling content ui form">
        <div class="ui form">
            <div class="ui field">
                <label>Tipo</label>
                <select id="select-funcionalidade">
                    @foreach( $funcionalidades as $opcao)
                        <option value="{{$opcao}}"> {{ $opcao->nome }} </option>
                    @endforeach
                </select>
            </div>
            <div class="ui field">
                <button class="ui icon button" onclick="preencheFuncionalidade()">
                    <i class="arrow down icon"></i>
                    Completar
                </button>
            </div>
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
                    <input id="preco-funcionalidade" type="number" step="any" placeholder="Preço da funcionalidade"/>
                </div>
            <input type="hidden" name="funcionalidades" id="funcionalidades" value="[]"/>
        </div>
    </div>
    <div class="actions">
        <button class="ui red button" onclick="$('#nova-funcionalidade').modal('hide')">Fechar</button>
        <button class="ui green button" onclick="addFuncionalidade()">Adicionar</button>
    </div>
</div>