<div class="container-fluid mt-5">

    <!-- Page Heading -->

    <!-- enctype="multipart/form-data habilita o form a enviar arquivo -->
    <form action="{{ route('api.users.create') }}" id="form_user" class="w-50 mx-auto" method="post" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="container">
            <div class="row mb-4 mx-auto">

                <div class="box col-12 "style="margin-top: 100px">
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
                </div>
                <div class="col-md-4">

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

        </div>
        <div class="row mt-5">
            <button id="btn-cadastrar-usuario" class="format-cpf form-control btn-cadastrar-usuario col-md-4 ml-3 mt-2 text-light  w-75 mx-auto">Realizar
                Cadastro
            </button>
        </div>
    </form>


</div>
<script>urlCreateUser = '{{ route("api.users.create") }}';</script>
<script src="{{url('js/formUser.js')}}"></script>
