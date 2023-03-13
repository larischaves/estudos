

$(document).on('click', '#btn-search', function(){
    const personagem = $('#personagens').val()
    $.ajax({
        url: `https://rickandmortyapi.com/api/character/${personagem}`,
        type:'get', //tipo de requisicao
        dataType:'json', //o que volta
        cache: false,
        contentType: false,
        processData: false,

    }).done((res) => {
        console.log(res)
    }).fail((err) => {
        console.error(err)
    })
})
