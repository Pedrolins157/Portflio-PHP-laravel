<div class="container-fluid">
    <div class="container p-5 w-50">
        <!-- Page Heading -->
        <div class="row mt-5 d-flex justify-content-center align-content-center">
            <img src="img/cliente-consulta.png" alt="">
        </div>
        <div class="row mt-2 mb-3 d-flex justify-content-center align-content-center">
            <h3 class=" mb-4 text-gray-800">Consulta de cliente</h3>
        </div>

        <!-- Dados do Form:Nome,E-mail,Cpf,Estado Civil -->
        <div class="row d-flex justify-content-center align-content-center">
            <form action="consultar-cliente.php" class="form-inline w-75 mb-2" method="get" auto-complete="off">
                <div class="row w-100">
                    <div class="col-8">
                        <input type="text" class="form-control  mr-4 w-100"  name="busca" Placeholder="Nome, email ou cpf">
                    </div>
                    <div class="col-4">
                        <button class="form-control btn btn-cadastrar-usuario text-light w-100">Pesquisar</button>
                    </div>
                </div>
            </form>

        </div>
    </div>
</div>