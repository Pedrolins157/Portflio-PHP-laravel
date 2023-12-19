<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Sistema Erp</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Deseja realmente sair do sistema?</div>
            <div class="modal-footer ">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="btn btn-control btn-danger" type="submit">Sair</button>
                </form>
            </div>
        </div>
    </div>
</div>


<!-- modal ponto de venda -->
<div class="modal fade" id="ExemploModalCentralizado" tabindex="-1" role="dialog"
    aria-labelledby="TituloModalCentralizado" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal-pdv">
            <div class="modal-header modal-pdv">
                <img src="img/pdv-inicio.png" class="mr-2 " style="width:60px;height:60px;">
                <h3 class="modal-title mt-1" id="TituloModalCentralizado">Ponto de venda </h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                    <span aria-hidden="true" style="width:15px;height:15px;">&times;</span>
                </button>
            </div>
            <div class="modal-body modal-pdv ml-4">
                <form action="{{ route('ponto.de.venda') }}" method="POST">
                    @csrf
                    <div class="row d-flex justify-content-evenly align-content-center">
                        <div class="col-3 mt-1">
                            Funcionário(a)
                        </div>
                        <div class="col-8 mb-2">
                            <input type="text" class="form-control" name="login">
                        </div>

                    </div>
                    <div class="row d-flex justify-content-evenly align-content-center">
                        <div class="col-3 mt-1">
                            Senha :
                        </div>
                        <div class="row col-8">
                            <div class="col-6">
                                <input id="password-pdv" type="password" class="form-control " style="width:150%;"
                                    name="password">
                            </div>
                            <div class="col-1">
                                <i style="margin-top:10px;" id="showPasswordPdv"
                                    class="fas fa-lock mr-5 d-flex justify-content-start  "></i>
                            </div>
                        </div>

                    </div>
                    <div class="mt-3 row d-flex justify-content-evenly align-content-center">
                        <div class="col-3 mt-1 p-0 ml-3">
                            Valor em Caixa
                        </div>
                        <div class="col-3 p-0">
                            <input type="text" class="form-control" id="valor" placeholder="R$ 0,00" name="valorCaixa">
                        </div>
                    </div>

            </div>
            <div class="modal-footer modal-pdv">
                <div>
                    <button type="button" class="button-pdv-cancel efeito" data-dismiss="modal">Fechar</button>
                </div>

                <div>
                    <button type="submit" class="button-pdv efeito"><span>Iniciar caixa</span></button>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    $('#showPasswordPdv').click(function () {
        let passwordField = $('#password-pdv');
        let fieldType = passwordField.attr('type');
        let isPasswordField = fieldType === 'password';

        passwordField.attr('type', isPasswordField ? 'text' : 'password');
        $(this).removeClass(isPasswordField ? 'fa-lock' : 'fa-lock-open').addClass(isPasswordField ? 'fa-lock-open' : 'fa-lock');
        $(this).toggleClass('rotateIcon', isPasswordField);
    });
</script>