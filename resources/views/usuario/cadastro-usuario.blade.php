<div class="container-fluid mt-5">

    <!-- Page Heading -->

    <!-- enctype="multipart/form-data habilita o form a enviar arquivo -->
    <form action="{{ route('api.users.create') }}" id="form_user" class="w-50 mx-auto" method="post" autocomplete="off"
        enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row mb-4 mx-auto">
                <input class="d-none" type="file" id="photo-input" name="foto" accept="jpg,jpeg,png">
                <div class="box col-12" style="margin-top: 100px">
                    <label class="avatar avatar01" for="photo-input">
                        <img id="avatar-image" src="img/perfil-usuario.jpg" style="width: 150px; left: 150px;"
                            alt="Avatar">
                    </label>


                </div>
                <!-- <input type="file" name="foto" placeholder="foto perfil" class="form-control-file mb-2 mt-1" accept="png,jpg,jpeg"> -->

            </div>
            <p class="h5 d-flex align-items-center justify-content-center "><b><i class=" far fa-images"></i> Adicionar
                    Foto </b></p>
            <div class="row">
                <p class="h5  mt-3 text-gray-800 ml-3">Dados do Funcionário</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="nome" placeholder="Nome" class="form-control mb-2 required">
                </div>
                <div class="col-md-6">
                    <input type="text" name="email" placeholder="E-mail" class="form-control mb-2">
                </div>

                <div class="col-md-4">
                    <input type="date" name="data_nascimento" id="data" placeholder="Data de Nascimento"
                        class="form-control mb-2">
                </div>
                <div class="col-md-4">

                    <input type="text" name="cpf" id="cpf" class="cpf form-control mb-2" placeholder="Cpf">
                    <spam id="errocpf"></spam>

                </div>
                <div class="col-md-4">
                    <input name="login" id="login" placeholder="login" class="form-control mb-2">
                    <spam id="errologin"></spam>
                </div>
                <div class="row col-md-4">
                    <div class="col-10">
                        <input style="width:136%;" type="password" placeholder="Senha" class="form-control "
                            name="password" id="primary-password" onchange="verificarSenha()">
                    </div>
                    <div class="col-2">
                        <i style="margin-top:10px;" id="showPassword" class="fas fa-lock mr-5 d-flex justify-content-start  "></i>

                    </div>
                </div>
                <div class="col-md-4">
                    <input type="password" placeholder="confirme senha" class="form-control check-password "
                        onchange="verificarSenha()">
                    <span class="text-danger ml-2 d-none" id="span-erro"><b> Senhas não coincidem! </b></span>
                </div>
                <div class="col-md-4">
                    <select name="perfil" id="perfil" class="form-control">
                        <option value="" disabled selected>Selecione a função</option>

                        <!-- Gerência/Administração -->
                        <optgroup label="Gerência/Administração">
                            <option value="gerente_geral">Gerente Geral</option>
                            <option value="gerente_loja">Gerente de Loja</option>
                            <option value="gerente_departamento">Gerente de Departamento</option>
                            <option value="gerente_recursos_humanos">Gerente de Recursos Humanos</option>
                            <option value="gerente_vendas">Gerente de Vendas</option>
                            <option value="gerente_financeiro">Gerente Financeiro</option>
                            <option value="gerente_marketing">Gerente de Marketing</option>
                        </optgroup>

                        <!-- Atendimento ao Cliente -->
                        <optgroup label="Atendimento ao Cliente">
                            <option value="atendente_balcao">Atendente de Balcão</option>
                            <option value="atendente_caixa">Atendente de Caixa</option>
                            <option value="assistente_vendas">Assistente de Vendas</option>
                            <option value="consultor_vendas">Consultor de Vendas</option>
                        </optgroup>

                        <!-- Logística e Estoque -->
                        <optgroup label="Logística e Estoque">
                            <option value="estoquista">Estoquista</option>
                            <option value="auxiliar_estoque">Auxiliar de Estoque</option>
                            <option value="analista_logistica">Analista de Logística</option>
                            <option value="coordenador_logistica">Coordenador de Logística</option>
                        </optgroup>

                        <!-- Operações -->
                        <optgroup label="Operações">
                            <option value="operador_maquinas">Operador de Máquinas</option>
                            <option value="auxiliar_producao">Auxiliar de Produção</option>
                            <option value="auxiliar_limpeza">Auxiliar de Limpeza</option>
                        </optgroup>

                        <!-- Tecnologia e TI -->
                        <optgroup label="Tecnologia e TI">
                            <option value="analista_suporte">Analista de Suporte Técnico</option>
                            <option value="desenvolvedor_software">Desenvolvedor de Software</option>
                            <option value="administrador_redes">Administrador de Redes</option>
                        </optgroup>

                        <!-- Marketing e Publicidade -->
                        <optgroup label="Marketing e Publicidade">
                            <option value="analista_marketing">Analista de Marketing</option>
                            <option value="designer_grafico">Designer Gráfico</option>
                            <option value="coordenador_marketing">Coordenador de Marketing Digital</option>
                        </optgroup>

                        <!-- Outras Funções Gerais -->
                        <optgroup label="Outras Funções Gerais">
                            <option value="assistente_administrativo">Assistente Administrativo</option>
                            <option value="recepcionista">Recepcionista</option>
                            <option value="contador">Contador</option>
                            <option value="seguranca">Segurança</option>
                            <option value="estagiario">Estagiário</option>
                        </optgroup>
                    </select>
                </div>

            </div>

        </div>
        <div class="row mt-5">
            <button id="btn-cadastrar-usuario"
                class="format-cpf form-control btn-cadastrar-usuario col-md-4 ml-3 mt-2 text-light  w-75 mx-auto">Realizar
                Cadastro
            </button>
        </div>
    </form>


</div>
<script>
    urlCreateUser = '{{ route("api.users.create") }}';
</script>
<script src="{{url('js/formUser.js')}}"></script>