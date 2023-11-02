mascaraCpf($('.cpf'));

mascaraCep($('#cep'));


$('form').submit(function (data) {
    data.preventDefault();
    var form = $('form');
    $.ajax({
        type: 'POST',
        url: urlCreateUser,
        data: form.serialize(),
        success: function (response) {
            Swal.fire({
                position: 'center',
                icon: 'success',
                title: 'Cadastro realizado com Sucesso!',
                showConfirmButton: false,
                timer: 1500
            }).then(() => {
                const form = document.getElementById('form_user');
                if (form) {
                    form.reset();
                }
            });
        },
        error: function (error) {
            console.log(error);
        }
    });

    return false;
});
$(document).ready(function () {
    $('.dropdown-item').on('click', function() {
        var perfilSelecionado = $(this).text().toLowerCase(); // Obtém o perfil selecionado
        $('#dropdownMenuLink').text(perfilSelecionado); // Atualiza o texto do dropdown

        if (perfilSelecionado === 'usuário' || perfilSelecionado === 'administrador') {
            realizarBusca(perfilSelecionado); // Chama a função realizarBusca com o perfil selecionado
        } else {
            $('#resultado').html(''); // Limpa a tabela se nenhum perfil for selecionado
        }
    });

    $('#btn-realizar-busca').on('click', function (event) {
        event.preventDefault();
        var buscar = $('#nome').val();

        if (!buscar) {
            var perfil = $('#dropdownMenuLink').text().toLowerCase();
            if (perfil === 'user' || perfil === 'adm') {
                realizarBusca(perfil); // Chama a função realizarBusca com o perfil selecionado
            } else {
                $('#resultado').html(''); // Limpa a tabela se nenhum perfil for selecionado
            }
        } else {
            $('#resultado').html(''); // Limpa a tabela se algo for digitado na busca
        }
    });

    function realizarBusca(perfil) {
        $.ajax({
            url: urlSearchUser,
            method: 'POST',
            data: {
                perfil: perfil
            },
            success: function (data) {
                var table = '<table class="table table-striped">';
                table += '<thead class="thead-dark"><tr><th>ID</th><th>Nome</th><th>Email</th><th>Data de Nascimento</th><th>Perfil</th></tr></thead>';
                table += '<tbody>';

                if (data.length > 0) {
                    $.each(data, function (key, user) {
                        table += '<tr>';
                        table += '<td>' + user.id + '</td>';
                        table += '<td>' + user.nome + '</td>';
                        table += '<td>' + user.email + '</td>';
                        table += '<td>' + user.data_nascimento + '</td>';
                        table += '<td>' + user.perfil + '</td>';
                        table += '</tr>';
                    });
                } else {
                    table += '<tr><td colspan="5">Nenhum resultado encontrado</td></tr>';
                }

                table += '</tbody></table>';
                $('#resultado').html(table);
            }
        });
    }
});
