<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
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
<!-- modal de vendas -->
<div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document" style="max-width:1300px;">
        <div class="modal-content">

            <div class="col-12 " style="border-bottom: #098894 1px solid; margin-bottom: 10px;padding: 20px 10px">
                <h2 class="text-center text-dark"> Pedro Henrique - incluíndo nova venda::.</h2>
            </div>

            <div class="container" style="max-width: 900px;">

                <div class="row modal-header d-flex align-content-center justify-content-center">
                    <div class="col-12 mb-4">
                        <h5 class="modal-title " id="exampleModalLabel">Efetuar
                            venda</h5>
                    </div>
                    <div class="row col-12 ">
                        <div class="col-auto w-auto ">
                            <p class="text-end text-dark mt-1">Nome do cliente :</p>
                        </div>
                        <div class="col-auto">
                            <input id="consultar-cliente-venda" type="text" class="form-control"
                                   name="buscar-cliente" autocomplete="off"
                                   placeholder="Pesquisar..."/>
                        </div>
                        <div  class="mt-3">
                            <spam id="resultado-cliente"></spam> 
                        </div>
                        <?php// include_once "buscar-cliente.php"; ?>
                        <div class="col-3">
                            <button class="btn-form btn btn-outline-success">Iniciar venda</button>
                        </div>
                    </div>
                </div>
                <div class="row modal-header d-flex align-content-center justify-content-center">
                    <div class="col-12 mb-4">
                        <h5 class="modal-title " id="exampleModalLabel">Adicionar produto</h5>
                    </div>
                    <div class="row col-12">
                        <div class="row col-6 d-flex ">
                            <div class="col-auto w-auto">
                                <p class=" text-dark mt-1 bg-gray-200 pt-1 pb-1 pl-2 pr-2">Produto:</p>
                            </div>
                            <div class="col-auto w-auto">
                                <input type="text" class="form-control " placeholder="nome do produto.."
                                       id="n_produto"/>
    
                            </div>
                            <div class="col-auto w-auto">
                                <p class="text-dark mt-1 bg-gray-200 pt-1 pb-1 pl-2 pr-2">Desconto % :</p>
                            </div>
                            <div>
                                <input type="text" class="form-control w-50 " id="n_desconto"/>
                            </div>
                            <div class="col-auto w-auto">
                                <p class="text-dark mt-1 bg-gray-200 pt-1 pb-1 pl-2 pr-2">Quantidade:</p>
                            </div>
                            <div>
                                <input type="number" class="form-control w-50" id="n_quantidade"/>
                            </div>
                        </div>
                        <div class="row col-6 d-flex">
                            <div class="col-auto w-auto">
                                <p class="text-dark mt-1 bg-gray-200 pt-1 pb-1 pl-2 pr-2">Valor:</p>
                            </div>
                            <div class="col-auto w-auto">
                                <input type="text" class="form-control w-50" id="n_valor"/>
                            </div>
                            <div class="col-auto w-auto">
                                <p class="text-dark mt-1 bg-gray-200 pt-1 pb-1 pl-2 pr-2">Desconto % :</p>
                            </div>
                            <div>
                                <input type="text" class="form-control w-25 "/>
                            </div>

                            <div class="row col-auto w-auto ml-2">
                                <p class="text-dark mt-1 bg-gray-200 pt-1 pb-1 pl-2 pr-2">Total :</p>
                                <div class="col-5">
                                    <input type="text" class="form-control w-75" value="" disabled/>
                                </div>
                                <div class="col-3">
                                    <button class="btn-form btn btn-outline-dark">Incluir</button>
                                </div>
                            </div>

                        </div>
                    </div>


                </div>


                <div class="modal-body row d-flex justify-content-evelyn">
                    <table class="table table-striped">
                        <thead>
                        <tr>
                            <th>Check</th>
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Valor unit.</th>
                            <th>Valor bruto</th>
                            <th>Desconto Total</th>
                            <th>Valor Total</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Produto A</td>
                            <td>10</td>
                            <td>R$ 20.00</td>
                            <td>R$ 200.00</td>
                            <td>R$ 10.00</td>
                            <td>R$ 190.00</td>
                        </tr>
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>Produto B</td>
                            <td>5</td>
                            <td>R$ 15.00</td>
                            <td>R$ 75.00</td>
                            <td>R$ 5.00</td>
                            <td>R$ 70.00</td>
                        </tr>

                        </tbody>
                    </table>
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-outline-secondary">finalizar Nota fiscal ::.</button>
                </div>
            </div>
        </div>
    </div>

</div>