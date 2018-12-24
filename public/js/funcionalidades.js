function preencheFuncionalidade(){
    const opcao = JSON.parse($("#select-funcionalidade").val())
    $('#id-funcionalidade').val(opcao.id)
    $('#nome-funcionalidade').val(opcao.nome)
    $('#valor-funcionalidade').val(opcao.valor)
    $('#descricao-funcionalidade').val(opcao.descricao)
    return false
}

function addFuncionalidade(){
    let temp = JSON.parse($("#funcionalidades").val())
    const func = {
        id: parseInt($("#id-funcionalidade").val()),
        nome: $('#nome-funcionalidade').val(),
        valor: parseInt($('#valor-funcionalidade').val()).toFixed(2),
        descricao: $('#descricao-funcionalidade').val(),
    }
    temp.unshift(func)
    $("#funcionalidades").val(JSON.stringify(temp))
    appendTable(func)
    $("#nova-funcionalidade").modal("hide")
    console.log(JSON.parse($("#funcionalidades").val()))
}

function appendTable(func){
    $("#table").append(`
        <tr>
            <td> ${func.nome} </td>
            <td> ${parseFloat(func.valor).toFixed(2)} </td>
            <td> ${func.descricao} </td>
        </tr>
    `)
}