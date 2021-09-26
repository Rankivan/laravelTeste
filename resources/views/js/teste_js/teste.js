$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});




$("#enviar").click(function() {

    $.ajax({
        url      : $('#createTeste').val(),
        type     : 'POST',
        data     : {
          usuario     : $('#usuario').val(),
          senha       : $('#senha').val(),
          nome        : $('#nome').val(),
          nivelAcesso : $('#nivelAcesso').val(),
        },
        beforeSend : function(){
            alert('Sucesso!')
        },
        error: function () {
            alert('erro!')
        }


    })
});


