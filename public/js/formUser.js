mascaraCpf($('#cpf'));

mascaraCep($('#cep'));


$('form').submit(function (data) {
    data.preventDefault();
    var form = $('form');
    $.ajax({
        type: 'POST',
        url: urlCreateUser,
        data: form.serialize(),
        success: function (response) {
            console.log(response);
        },
        error: function (error) {
            console.log(error);
        }
    });

    return false;
});
