mascaraCpf($('.cpf'));

$('form').submit(function (data) {
    data.preventDefault();
    var form = $('form');
    $.ajax({
        type: 'POST',
        url: urlCreateClient,
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