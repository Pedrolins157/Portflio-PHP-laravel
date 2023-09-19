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
$('#toggle').click(function() {
    if ($(this).is(':checked')) {

        $('.checked-day').removeClass('modo-diurno');
        $('.checked-day-a').removeClass('text-gray-800');
        $('.checked-day').addClass('modo-noturno');
        $('.checked-day-body').removeClass('modo-diurno-body');
        $('.checked-day-body').addClass('modo-noturno-body');
        
    } else {
        $('.checked-day').removeClass('modo-noturno');
        $('.checked-day').addClass('modo-diurno');
        $('.checked-day-body').removeClass('modo-noturno-body');
        $('.checked-day-body').addClass('modo-diurno-body');
        $('.checked-day-a').addClass('text-gray-800');
        
    }
});

