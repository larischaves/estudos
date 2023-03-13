
function limparFormularioCep() {
    // Limpa valores do formulário de cep.
    $("#rua").val("");
    $("#bairro").val("");
    $("#cidade").val("");
    $("#estado").val("");
}

$(document).on('click', '#btn-search-cep', function(){
    const cep = $('#cep').val()
    $.ajax({
        url: `https://viacep.com.br/ws/${cep}/json/`, //rota
        type:'get', //tipo de requisicao
        dataType:'json', //o que volta
        cache: false,
        contentType: false,
        processData: false,
    }).done((res) => {
        $('#rua').val(res.logradouro)
        $('#bairro').val(res.bairro)
        $('#cidade').val(res.localidade)
        $('#estado').val(res.uf)
    }).fail((err) => {
        console.error(err)
        limparFormularioCep()
        alert("CEP não encontrado.")
    })
})
