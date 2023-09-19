<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <title>Gerenciamento Lins</title>
    <link rel="icon" href="img/icon-lins.png" type="image/png" sizes="32x32">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
</head>

<body id="page-top">

    <div id="wrapper">

        @include('layout.parte.sidebar')

        <div id="content-wrapper" class="d-flex flex-column">

            <div id="content" class="modo-diurno-body  checked-day-body">


                @include('layout.parte.topbar')

                <div class="container-fluid mb-5">

                    <h2 class="">Dashboard</h2>
                    <h5 class=" mb-4  "><b>Seja bem-vindo <?php /* echo $_SESSION["nome"] */ ?> !</b></h5>

                    <div class="row mb-5 mt-5">
                        <img src="img/farmacia-home.png" class="rounded mx-auto d-block" alt="...">
                    </div>
                    <div class="row  mt-5 d-flex justify-content-center align-content-center ">
                        <div class="col-2  d-flex justify-content-center align-content-center"><a href="#"><img data-toggle="modal" data-target="#modalExemplo" src="img/vendas.png" alt="" class="btn-function d-flex form-control border-0 bg-gray-200 p-3 efeito" style="width:80px;height:80px;"></a>
                        </div>
                        <div class="col-2  d-flex justify-content-center align-content-center"><a href="#"><img id="entregas" src="img/delivery.png" alt="" class="btn-function d-flex form-control border-0 bg-gray-200 p-3  efeito" style="width:80px;height:80px;" value="Entregas"> </a>
                        </div>
                        <div class="col-2  d-flex justify-content-center align-content-center"><a href="#"><img src="img/historico.png" alt="" id="meuBotao" class="  btn-function d-flex form-control border-0 bg-gray-200 p-3 efeito" style="width:80px;height:80px;"></a>
                        </div>
                    </div>
                </div>
            </div>

            @include('layout.parte.footer')
            @include('layout.modal.modal')

        </div>

    </div>
</body>

</html>