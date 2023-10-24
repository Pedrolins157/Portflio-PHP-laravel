<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sistema de Gerenciamento</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Deseja realmente sair do sistema?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <a class="btn btn-primary" href="sair.php">Sair</a>
            </div>
        </div>
    </div>
</div>
<!-- modal ponto de venda -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog" aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <img src="img/teste-venda.png" class="mr-2 mt-1" style="width:32px;height:32px;"> <h3 class="modal-title" id="TituloModalCentralizado">Ponto de venda </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row d-flex justify-content-evenly align-content-center">
                    <div class="col-3 mt-1">
                        Vendedor(a)
                    </div>
                    <div class="col-8">
                        <input type="text" class="form-control" >
                    </div>
                </div>
                <div class="mt-3 row d-flex justify-content-evenly align-content-center">
                    <div class="col-3 mt-1 p-0 ml-3">
                        Valor em Caixa 
                    </div>
                    <div class="col-3 p-0">
                        <input type="number" class="form-control" id="valor" oninput="formatarMoeda(this)" placeholder="00,00" >
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-cadastrar-usuario text-light">Abrir Caixa</button>
            </div>
        </div>
    </div>
</div>