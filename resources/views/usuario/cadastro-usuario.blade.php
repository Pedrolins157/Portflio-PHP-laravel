<div class="container-fluid ">

    <!-- Page Heading -->

    <!-- enctype="multipart/form-data habilita o form a enviar arquivo -->
    <form action="{{ route('api.users.create') }}" class="w-50 mx-auto" method="post" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row mb-4 mx-auto">

                <div class="box col-12 mt-5">
                    <label class="avatar avatar01" for="btn">
                        <img src="img/perfil-usuario.jpg" style="width:150px;left:150px;" alt="">

                    </label>
                    <input type="checkbox" id="btn">
                    <div class="menu">
                        <a href="#"><i class="fa fa-upload"> <span>upload</span></i></a>
                        <br>
                        <a href="#"><i class="fa fa-edit"> <span>edite</span></i></a>
                    </div>

                </div>
                <!-- <input type="file" name="foto" placeholder="foto perfil" class="form-control-file mb-2 mt-1" accept="png,jpg,jpeg"> -->

            </div>
            <p class="h5 d-flex align-items-center justify-content-center "><b><i class=" far fa-images"></i> Adicionar Foto </b></p>
            <div class="row">
                <p class="h5  mt-3 text-gray-800 ml-3">Dados do Usuário</p>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <input type="text" name="nome" placeholder="Nome" class="form-control mb-2 required">
                </div>
                <div class="col-md-6">
                    <input type="text" name="email" placeholder="E-mail" class="form-control mb-2">
                </div>

                <div class="col-md-4">
                    <input type="date" name="data_nascimento" id="data" placeholder="Data de Nascimento" class="form-control mb-2">
                </div>maxlength="11"
                <div class="col-md-4">
                    <input type="text" name="cpf" id="cpf" class="form-control mb-2"  placeholder="Cpf" >
                    <small id="cpfError" class="text-danger"></small>

                    <input type="text" name="cpf" id="cpf" class="cpf form-control mb-2" placeholder="Cpf">
                    <spam id="errocpf"></spam>

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
            </div>
            <div class="row">
                <p class="h5  mt-3 text-gray-800 ml-3">Endereço do Usuário</p>
            </div>
            <div class="row mt-3">
                <div class="col-md-12">
                    <input type="text" class="form-control mb-2" id="logradouro" placeholder="Logradouro" name="logradouro">
                </div>
                <div class="col-md-6">
                    <input type="text" class="form-control mb-2" placeholder="Cep" id="cep" name="cep">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control mb-2" id="numero" placeholder="Numero" name="numero">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control mb-2" placeholder="Complemento" name="complemento">
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control mb-2" id="bairro" placeholder="Bairro" name="bairro">
                </div>
                <div class="col-md-4">
                    <input type="text" class="form-control mb-2" id="cidade" placeholder="Cidade" name="cidade">
                </div>
                <div class="col-md-3 w-auto">
                    <input type="text" class="form-control mb-2 w-50" id="uf" placeholder="Uf" name="uf">
                </div>
            </div>
        </div>
        <div class="row">
            <button id="btn-cadastrar-usuario" class="format-cpf form-control btn-cadastrar-usuario col-md-4 ml-3 mt-2 text-light  w-75 mx-auto">Realizar
                Cadastro
            </button>
        </div>
    </form>


</div>
<script>
    urlCreateUser = '{{ route("api.users.create") }}';
</script>
<script src="{{url('js/formUser.js')}}"></script>
