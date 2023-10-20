<div class="container-fluid">
    <div class="container p-5 w-50">
        <!-- Page Heading -->
        <div class="row mt-5 d-flex justify-content-center align-content-center">
            <img src="img/cliente-cadastro.png" alt="">
        </div>
        <div class="row mt-2 mb-3 d-flex justify-content-center align-content-center">
            <h1 class="h2 mb-4 text-gray-800">Cadastro de Cliente</h1>
        </div>

        <!-- Dados do Form:Nome,E-mail,Cpf,Estado Civil -->
        <div class="row d-flex justify-content-center align-content-center">
            <form action="gravar-cliente.php" autocomplete="off" class="w-50 mb-2 " method="post">

                <input type="text" require Placeholder="Nome do cliente" name="nome" class="mb-2 form-control">
                <input type="email" require Placeholder="Email do cliente" name="email" class="mb-2 form-control">
                <input type="text" require maxlength="11" Placeholder="Cpf do Cliente" name="cpf" class="mb-2 form-control">
                <div class="row">
                    <div class="col-8">
                        <select name="estadocivil" required class="form-control mb-3">
                            <option value="" disabled selected>Estado civil</option>
                            <option value="solteiro">Solteiro(a)</option>
                            <option value="casado">Casado(a)</option>
                            <option value="viuvo">Viúvo(a)</option>
                            <option value="divorciado">Divorciado(a)</option>
                        </select>
                    </div>
                    <div class="col-4">
                        <Button class="btn text-light w-100" style="background-image: linear-gradient(to right, #002c62, #4300a8a6);">Criar</Button>
                    </div>
                </div>

            </form>
        </div>
    </div>
</div>