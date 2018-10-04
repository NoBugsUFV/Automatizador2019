function preencheFuncionalidade(){
    const opcao = JSON.parse($("#select-funcionalidade").val())
    $('#id-funcionalidade').val(opcao.id)
    $('#nome-funcionalidade').val(opcao.nome)
    $('#descricao-funcionalidade').val(opcao.descricao)
    $('#valor-funcionalidade').val(opcao.valor)
    return false
}

function addFuncionalidade(){
    let temp = JSON.parse($("#funcionalidades").val())
    const func = {
        nome: $('#nome-funcionalidade').val(),
        descricao: $('#descricao-funcionalidade').val(),
        valor: $('#valor-funcionalidade').val()
    }
    $("#funcionalidades").val(JSON.stringify([func,...temp]))
    appendTable(func)
    $("#nova-funcionalidade").modal("hide")
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