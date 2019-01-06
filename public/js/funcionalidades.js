function preencheFuncionalidade(){
    const opcao = JSON.parse($("#select-funcionalidade").val())
    $('#id-funcionalidade').val(opcao.id)
    $('#nome-funcionalidade').val(opcao.name)
    $('#valor-funcionalidade').val(opcao.value)
    $('#descricao-funcionalidade').val(opcao.description)
    return false
}

function addFuncionalidade(){
    let temp = JSON.parse($("#funcionalidades").val())
    const func = {
        id: parseInt($("#id-funcionalidade").val()),
        name: $('#nome-funcionalidade').val(),
        value: parseInt($('#valor-funcionalidade').val()).toFixed(2),
        description: $('#descricao-funcionalidade').val(),
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
            <td> ${func.name} </td>
            <td> ${parseFloat(func.value).toFixed(2)} </td>
            <td> ${func.description} </td>
        </tr>
    `)
}