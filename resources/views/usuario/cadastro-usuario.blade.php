<div class="container-fluid ">

                    <!-- Page Heading -->


                    <p class="h5 mb-2 mt-3 text-gray-800 ml-1  w-75 mx-auto ">Dados do Usuário</p>

                    <!-- enctype="multipart/form-data habilita o form a enviar arquivo -->
                    <form action="" class="w-75 mx-auto" method="post" autocomplete="off"
                        enctype="multipart/form-data">
                        <div class="row">
                            <!-- Nome & e-mail -->
                            <div class="col-md-6">
                                <input type="text" name="nome" placeholder="Nome" class="form-control mb-2 required">
                            </div>

                            <div class="col-md-6">
                                <input type="text" name="email" placeholder="E-mail" class="form-control mb-2">
                            </div>
                            <!--data nascimento & cpf & foto -->
                            <div class="col-md-4">
                                <input type="text" name="data_nascimento" id="data" placeholder="Data de Nascimento"
                                    class="form-control mb-2">
                            </div>

                            <div class="col-md-4">
                                <input type="text" name="cpf" placeholder="Cpf" id="cpf" class="form-control mb-2">
                                <spam id="errocpf"></spam>
                            </div>

                            <div class="col-md-4">
                                <input type="file" name="foto" placeholder="foto perfil"
                                    class="form-control-file mb-2 mt-1" accept="png,jpg,jpeg">
                            </div>

                            <div class="col-md-4">
                                <input name="login" id="login" placeholder="login" class="form-control mb-2">
                                <spam id="errologin"></spam>
                            </div>

                            <div class="col-md-4">
                                <input type="password" placeholder="Senha" class="form-control" name="senha">
                            </div>

                            <div class="col-md-4">
                                <select name="perfil" id="" class="form-control ">
                                    <option value="" disabled selected>Perfil</option>
                                    <option value="user">Usuário</option>
                                    <option value="adm">Administrador</option>
                                </select>
                            </div>
                            <p class="h5 mb-2 mt-3 text-gray-800 ml-3">Endereço do Usuário</p>
                            <div class="col-md-12">
                                <input type="text" class="form-control mb-2" placeholder="Cep" id="cep" name="cep">
                            </div>
                            <div class="col-md-6">
                                <input type="text" class="form-control mb-2" id="logradouro" placeholder="Logradouro"
                                    name="logradouro">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control mb-2" id="numero" placeholder="Numero"
                                    name="numero">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-2" placeholder="Complemento"
                                    name="complemento">
                            </div>
                            <div class="col-md-2">
                                <input type="text" class="form-control mb-2" id="bairro" placeholder="Bairro"
                                    name="bairro">
                            </div>
                            <div class="col-md-4">
                                <input type="text" class="form-control mb-2" id="cidade" placeholder="Cidade"
                                    name="cidade">
                            </div>
                            <div class="col-md-1">
                                <input type="text" class="form-control mb-2" id="uf" placeholder="Uf" name="uf">
                            </div>
                        </div>
                        <div class="row">
                            <button id="btn-cadastrar-usuario" class="form-control btn-secondary col-md-4 ml-3 mt-2  w-75 mx-auto">Realizar
                                Cadastro
                            </button>
                        </div>
                    </form>

                </div>
