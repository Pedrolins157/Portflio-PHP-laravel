<div class="container-fluid">
    <div class="container">
        <div class="row mt-5 mb-4">
            <div class="box col-12 mt-5">
                <label class="avatar" for="btn">
                    <img src="img/perfil-usuario.jpg" style="width:150px;left:150px;" alt="">
                </label>
                
            </div>
        </div>
        <div class="row d-flex justify-content-center align-content-center mb-3">
        <p class="h5 "><b><i class="far fa-id-card "></i> Consulta de Usuários </b></p>
        </div>
        <div class="row">
            <div class="col-4 d-flex justify-content-end">
                <div class="dropdown">
                    <a class="btn btn-dark dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Perfil
                    </a>

                    <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                        <a class="dropdown-item" href="#">usuário</a>
                        <a class="dropdown-item" href="#">Administrador</a>

                    </div>
                </div>
            </div>
            <div class="col-4 d-flex justify-content-between p-0">
                <p class="h5 mb-4 text-gray-800"></p>
                <input type="text" id="nome" autocomplete="off" class="form-control  mr-4" name="buscar" placeholder="Nome, email ou cpf">
                <div id="resultado" class="mt-3"></div>
            </div>
            <div class="col-4 p-0">
              <a href="" class="btn-control  btn btn-cadastrar-usuario text-light " ><i class="fas fa-search "></i></a>
            </div>
        </div>


    </div>
</div>