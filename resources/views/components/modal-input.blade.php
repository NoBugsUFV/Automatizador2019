<script>

$("#select-funcionalidade").change(function (){
    console.log('atualizou')
    const valor=$("#select-funcionalidade").value
    console.log(valor)
    $('#nome-funcionalidade').value = opcao.nome
})

</script>

<div id="nova-funcionalidade" class="ui tiny modal">
    <div class="header">
        Inserir funcionalidade
    </div>
    <div class="centered content ui form">
        <div class="ui field">
            <label>Tipo</label>
            <select id="select-funcionalidade">
                @foreach( $funcionalidades as $opcao)
                    echo "<option value="{{$opcao->id}}"> {{ $opcao->nome }} </option>";
                @endforeach
            </select>
        </div>
        <div class="ui field focus">
            <label>Nome</label>
            <input id="nome-funcionalidade" placeholder="Nome da funcionalidade"/>
        </div>
        <div class="ui field">
            <label>Descrição</label>
            <textarea id="descricao-funcionalidade" rows=3></textarea>
        </div>
        <div class="actions">
            <button class="ui cancel button" onclick="$('#nova-funcionalidade').close()">Fechar</button>
        </div>
    </div>
</div>