@extends('layouts/app')
<div class="container card-1 ">
    <div class="row justify-content-center">
        <div class="col-xl-10 col-lg-12 col-md-9">
            <div class="card o-hidden border-0 w-100  shadow-lg my-5">
                <div class="card-body p-0">
                    <div class="row align-items-center mx-auto " style="height: 55vh;">
                        <div class="col-6 d-none  d-lg-block" style="background-color: #130e4a;">
                            <img src="img/logo-lins.png" alt="" style=" width:100%;height:54vh;">
                            <p class="form-check "></p>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h1 class=" text-gray-900 mb-4">Login </h1>
                                    <H5>Seja Bem-Vindo(a)!</H5>
                                </div>
                                <form action="verificar-login.php" method="post" autocomplete="off">
                                    <div class="form-group">
                                        <input type="text" required name="login" class="form-control form-control-user" id="login" aria-describedby="emailHelp" placeholder="Digite seu login">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" required name="senha" class="form-control form-control-user" id="exampleInputPassword" placeholder="Digite sua senha">
                                    </div>
                                    <button class="btn  btn-user btn-block text-ligh " style="background-color: #130e4a;">
                                        Entrar
                                    </button>
                                </form>
                                <hr>
                                <?php
                                if (isset($_GET["msg"])) {
                                    echo "<div class='alert alert-danger'>" . $_GET['msg'] . "</div>";
                                }
                                ?>
                                <div class="text-center">
                                    <a class="small" href="recuperar-senha.php">Esqueceu a senha ?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>