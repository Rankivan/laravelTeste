
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

$("#enviar").click(function() {
    $.ajax({
        url      : $('#salvar').val(),
        type     : 'POST',
        data     : {
          usuario     : $('#usuario').val(),
          senha       : $('#senha').val(),
          nome        : $('#nome').val(),
          nivelAcesso : $('#nivelAcesso').val(),
          id          : $('#id').val(),
        }
    })
        .done(function(response) {
            $('#modal').modal('show');
            if (response === ok){

                //Mensagem de sucesso.
                $('#retorno').html(messageOk);

                setTimeout(function () {
                    $('#modal').modal('hide')
                }, 2500);

            } else {
              console.log('deu ruim')

                //Mensagem de Erro.
                $('#retorno').html(messageFail);

                setTimeout(function () {
                    $('#modal').modal('hide')
                }, 2500);
            }

        });

});


