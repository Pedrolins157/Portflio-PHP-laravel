mascaraCpf($('.cpf'));

mascaraCep($('#cep'));

document.getElementById('photo-input').addEventListener('change', function (event) {
    const file = event.target.files[0];
    const reader = new FileReader();

    reader.onload = function (e) {
        document.getElementById('avatar-image').setAttribute('src', e.target.result);
    };

    reader.readAsDataURL(file);
});


$('form').submit(function (event) {
    event.preventDefault();
    var form = $(this)[0];
    var formData = new FormData(form);

    var fileInput = $('#photo-input')[0].files[0]; // Obtém o arquivo da foto
    formData.append('foto', fileInput); // Adiciona o arquivo ao FormData

    $.ajax({
        type: 'POST',
        url: urlCreateUser,
        data: formData,
        contentType: false,
        processData: false,
        cache: false,
        success: function (response) {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Cadastro realizado com Sucesso!',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                form.reset();
                reader.readAsDataURL(file).reset();
            });
        },
        error: function (error) {
            if (error.responseJSON && error.responseJSON.errors) {
                var errors = error.responseJSON.errors;

                // Iterar pelos erros recebidos
                Object.keys(errors).forEach(function (key) {
                    var errorMessage = errors[key].join(' '); // Juntar mensagens de erro, se houver várias
                    var inputElement = $('#' + key);
                    inputElement.siblings('.error-message').text(errorMessage);
                    inputElement.addClass('red-border');
                    inputElement.on('focus', function () {
                        $(this).removeClass('red-border');
                        inputElement.siblings('.error-message').text('');
                    });
                });
            }
        }
    });

    return false;
});
//checked password
function verificarSenha() {
    $('#password, .check-password,#password-pdv').on('keyup', function () {
        let password = $('#password').val();
        let checkedPassword = $('.check-password').val();

        let senhasDiferentes = password !== checkedPassword;

        $('#btn-cadastrar-usuario').prop('disabled', senhasDiferentes ? true : false);

        $('#span-erro').toggleClass('d-flex', senhasDiferentes);
        $('#password, .check-password').toggleClass('span-erro-border', senhasDiferentes);
    });
}


//show password 
$(document).ready(function () {
    $('#showPassword').click(function () {
        let passwordField = $('#password ,#password-pdv');
        let fieldType = passwordField.attr('type');
        let isPasswordField = fieldType === 'password';

        passwordField.attr('type', isPasswordField ? 'text' : 'password');
        $(this).removeClass(isPasswordField ? 'fa-lock' : 'fa-lock-open').addClass(isPasswordField ? 'fa-lock-open' : 'fa-lock');
        $(this).toggleClass('rotateIcon', isPasswordField);
    });
});




$(document).ready(function () {
    $('.dropdown-item').on('click', function () {
        var perfilSelecionado = $(this).text().toLowerCase();

        $('#dropdownMenuLink').text(perfilSelecionado);

        if (perfilSelecionado === 'vendedor') {
            perfilSelecionado = ('user');
            realizarBusca(perfilSelecionado);
        } else if (perfilSelecionado === 'administrador') {
            perfilSelecionado = ('adm');
            realizarBusca(perfilSelecionado);
        } else {
            realizarBusca('');
        }
    });
    $('#nome').on('input', function () {
        var perfilSelecionado = $('#dropdownMenuLink').text().toLowerCase();
        var nome = $(this).val();
        realizarBusca(perfilSelecionado, nome);
    });


    function realizarBusca(perfil, nome) {
        $.ajax({
            url: urlSearchUser,
            method: 'POST',
            data: {
                perfil: perfil,
                nome: nome
            },
            success: function (data) {
                var table = '<table class="table table-striped">';
                table += '<thead class="thead-dark"><tr><th>ID</th><th>Nome</th><th>Email</th><th>Data de Nascimento</th><th>Perfil</th><th>editar</th></tr></thead>';
                table += '<tbody>';

                if (data.length > 0) {
                    $.each(data, function (key, user) {
                        table += '<tr>';
                        table += '<td>' + user.id + '</td>';
                        table += '<td>' + user.nome + '</td>';
                        table += '<td>' + user.email + '</td>';
                        table += '<td>' + user.data_nascimento + '</td>';
                        table += '<td>' + user.perfil + '</td>';
                        table += '<td><a href="#" class=" mr-3 text-danger"><i class="fas fa-trash-alt"></i></a>|<a href="#" class="ml-3 text-dark"><i class="fas fa-user-edit"></i></a></td>';
                        table += '</tr>';
                    });
                } else {
                    table += '<tr><td colspan="6">Nenhum resultado encontrado</td></tr>';
                }

                table += '</tbody></table>';
                $('#resultado').html(table);
            }
        });
    }
});
