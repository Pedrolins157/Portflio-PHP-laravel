var htmlInventario = `<div class="row card-inventario">
    <div class=" row col-12 mb-3">
        <div class="col-4 " id="inventario-body">
            <input class="form-control bg-gray-400" type="text" placeholder="Código ou nome do inventário ..."
                   style="    box-shadow: rgba(99, 99, 99, 0.2) 0px 2px 8px 0px;"/>
        </div>
        <div class="col-3 ml-0 ">
            <button class="btn btn-secondary w-auto "><i class="fas fa-search ml-1"></i> Pesquisar</button>
        </div>
    </div>
    <div class="row col-12">
        <table class="table">
            <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col"> Primeiro</th>
                <th scope="col"> Último</th>
                <th scope="col"> Nickname</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <th scope="row"> 1</th>
                <td> Mark</td>
                <td> Otto</td>
                <td> @mdo</td>
            </tr>
            <tr>
                <th scope="row"> 2</th>
                <td> Jacob</td>
                <td> Thornton</td>
                <td> @fat</td>
            </tr>
            <tr>
                <th scope="row"> 3</th>
                <td> Larry</td>
                <td> the Bird</td>
                <td> @twitter</td>
            </tr>
            </tbody>
        </table>
    </div>
    <div class="row col-12 justify-content-end">
        <nav class="d-flex">
            <ul class="pagination ">
                <li class="page-item ">
                    <a class="page-link text-secondary" href="#" tabindex="-1"> Anterior</a>
                </li>
                <li class="page-item"><a class="page-link text-danger" href="#"> 1</a></li>
                <li class="page-item ">
                    <a class="page-link text-danger" href="#"> 2 <span class="sr-only bg-gray-100"> (atual)</span></a>
                </li>
                <li class="page-item text-secondary "><a class="page-link text-danger" href="#"> 3</a>
                </li>
                <li class="page-item">
                    <a class="page-link text-secondary" href="#"> Próximo</a>
                </li>
            </ul>
        </nav>
    </div>
</div>`
$(document).ready(function () {
    $('#inventario').click(function () {
        //$('#local-trabalho').html(htmlInventario) ;
        $.ajax({
            method: "POST",
            url: "consulta-inventario.php",
        });
    });
});

$(document).ready(function () {
    // Verificar o estado no localStorage e aplicar classes correspondentes
    if (localStorage.getItem('modoNoturno') === 'true') {
        $('#toggle').prop('checked', true);

        $('.checked-day').removeClass('modo-diurno').addClass('modo-noturno');
        $('.checked-day-a').removeClass('text-gray-800');
        $('.checked-day-body').removeClass('modo-diurno-body').addClass('modo-noturno-body');
    }

    // Lidar com a mudança de estado do botão
    $('#toggle').change(function () {
        if ($(this).is(':checked')) {
            // Atualizar classes e salvar estado no localStorage
            $('.checked-day').removeClass('modo-diurno').addClass('modo-noturno');
            $('.checked-day-a').removeClass('text-gray-800');
            $('.checked-day-body').removeClass('modo-diurno-body').addClass('modo-noturno-body');
            localStorage.setItem('modoNoturno', 'true');
        } else {
            // Atualizar classes e remover estado do localStorage
            $('.checked-day').removeClass('modo-noturno').addClass('modo-diurno');
            $('.checked-day-a').addClass('text-gray-800');
            $('.checked-day-body').removeClass('modo-noturno-body').addClass('modo-diurno-body');
            localStorage.removeItem('modoNoturno');
        }
    });
});
$('.load-page').click(function () {

    var href = $(this).attr('href');

    $('.dashboard-body').load(href);

    return false;
});

function formatarMoeda(input) {
    // Remove caracteres não numéricos
    input.value = input.value.replace(/\D/g, "");

    // Formata o valor para o formato de moeda (00,00)
    input.value = input.value.replace(/(\d{2})(\d{2})$/, "$1,$2");
}
// cadastramento de Usuário


function mascaraCpf(element) {
    // mascara CPF
    element.on('input', function () {
        var value = $(this).val().replace(/\D/g, '');
        if (value.length > 11) {
            value = value.substring(0, 11);
        }
        var formattedValue = value.replace(/(\d{3})(\d{3})(\d{3})(\d{2})/, "$1.$2.$3-$4");
        $(this).val(formattedValue);
    });

    element.on('blur', function () {
        var unmaskedValue = $(this).val().replace(/\D/g, '');
        if (unmaskedValue.length === 11) {
            if (validaCPF(unmaskedValue)) {
                $(this).removeClass('is-invalid');
                $('#cpfError').text('');
            } else {
                $(this).addClass('is-invalid');
                $('#cpfError').text('CPF inválido');
            }
        } else {
            $(this).removeClass('is-invalid');
            $('#cpfError').text('');
        }
    });

    function validaCPF(cpf) {
        cpf = cpf.replace(/[^\d]+/g, '');
        if (cpf.length != 11 || /^(.)\1{10}$/.test(cpf)) return false;
        return true;
    }
}

function mascaraCep(element) {
    //mascara cep
    element.on('input', function () {
        var value = $(this).val().replace(/\D/g, '');
        if (value.length > 8) {
            value = value.substring(0, 8);
        }
        var formattedValue = value.replace(/(\d{5})(\d{3})/, "$1-$2");
        $(this).val(formattedValue);
    });
}

    // mascara uf
    $('#uf').on('input', function () {
        var value = $(this).val().toUpperCase(); // Converte para maiúsculas
        if (value.length > 2) {
            value = value.substring(0, 2); // Limita a 2 letras
        }
        $(this).val(value); // Atualiza o valor no campo
    });
