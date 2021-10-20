
// Permissão token para ajax
$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

// Códigos das respostas Http
ok          = '200';
fail        = '412';

// Messages Feedback
messageFail =

    '            <div class="alert alert-danger d-flex align-items-center" role="alert">\n' +
    '                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Danger:"><use xlink:href="#exclamation-triangle-fill"/></svg>\n' +
    '                    <div>\n' +
    '                        <h5>Erro ao realizar a operação!</h5>\n' +
    '                    </div>\n' +
    '                </div>'
;

messageOk   =

    '                <div class="alert alert-success d-flex align-items-center" role="alert" >\n' +
    '                    <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use xlink:href="#check-circle-fill"/></svg>\n' +
    '                    <div>\n' +
    '                        <h5>Operação realizada com sucesso!</h5>\n' +
    '                    </div>\n' +
    '                </div>'
;

window.onload = function(){
    loaddingCube = $('#loaddingCube');
    loaddingCube.hide();
}



