mascaraCpf($('.cpf'));

mascaraCep($('#cep'));

// $(document).ready(function() {
//     $('#photo-input').change(function() {
//         var file = this.files[0];
//         var reader = new FileReader();
//
//         reader.onload = function(e) {
//             $('#avatar-image').attr('src', e.target.result);
//         };
//
//         if (file) {
//             reader.readAsDataURL(file);
//         }
//     });
// });

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
    $('.dropdown-item').on('click', function () {
        var perfilSelecionado = $(this).text().toLowerCase();

        $('#dropdownMenuLink').text(perfilSelecionado);

        if (perfilSelecionado === 'vendedor') {
            perfilSelecionado = ('user');
            realizarBusca(perfilSelecionado);
        } else if (perfilSelecionado === 'administrador') {
            perfilSelecionado = ('adm');
            realizarBusca(perfilSelecionado);
        } else  {
            realizarBusca( '');
        }
    });
    $('#nome').on('input', function() {
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
