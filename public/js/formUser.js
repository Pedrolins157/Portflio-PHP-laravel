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
            console.log(response);
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

        if (perfilSelecionado === 'user' || perfilSelecionado === 'adm') {
            // Se o perfil selecionado for 'usuário' ou 'administrador', realiza a busca
            realizarBusca(perfilSelecionado); // Chama a função realizarBusca com o perfil selecionado
        } else {
            $('#resultado').html(''); // Limpa a tabela se nenhum perfil for selecionado
        }
    });

    $('#btn-realizar-busca').on('click', function (event) {
        event.preventDefault();
        var buscar = $('#nome').val(); // Ignorando a busca por nome

        if (!buscar) {
            var perfil = $('#dropdownMenuLink').text().toLowerCase(); // Obtém o perfil selecionado

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
