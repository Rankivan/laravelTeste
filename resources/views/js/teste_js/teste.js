
$("#enviar").click(function () {
    //Loadding...
    loaddingCube.show();

    $.ajax({
        url  : $('#salvar').val(),
        type : 'POST',
        data : {
            usuario     : $('#usuario').val(),
            senha       : $('#senha').val(),
            nome        : $('#nome').val(),
            nivelAcesso : $('#nivelAcesso').val(),
            id          : $('#id').val(),
        },
    })
        .done(function (response) {
            loaddingCube.hide();
            $('#messageRetorno').modal('show');

            if (response === ok) {
                //Mensagem de sucesso.
                $('#retorno').html(messageOk);
                setTimeout(function () {
                    $('#messageRetorno').modal('hide')
                }, 1500);

            } else {
                //Mensagem de Erro.
                $('#retorno').html(messageFail);
                setTimeout(function () {
                    $('#messageRetorno').modal('hide')
                }, 1500);
            }

        })

});





