<!DOCTYPE html>
<html lang="en">

<head>

    <title>Gerenciamento Lins</title>
    <link rel="stylesheet" type="text/css" media="screen" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="icon" href="img/icon-lins.png" type="image/png" sizes="32x32">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/4.6.2/css/bootstrap.min.css">
</head>

<body style="background-color: #e7e7ec;">

    <nav class="navbar navbar-expand-lg navbar-light bg-light text-light">
        <a class="navbar-brand" href="#"><img src="img/icon-lins.png" alt="" style="border-radius:50%;"> Nome da Empresa</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mr-4" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active ml-2">
                    <a class="nav-link" href="#" style="border-radius:20%;background-color:#00bd0082;"><img src="img/scanner.png" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="img/impressora.png" width="26px" height="26px" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><img src="img/user-venda.png" alt=""></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#"><img src="img/logout.png" alt=""></a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container" style="max-width: 90%;">
        <div class="row " style="margin-top:100px;">
            <div class="col " style="border-right:1px solid gray;">
                <div class="row">
                    <h3 class="text-gray-800 ml-3">Código de Barra </h3>
                </div>
                <div class="row col-12 ">
                    <input type="text" class="form-control " style="height:60px;font-size: 24px;" placeholder="Nome do produto ou código de barras">
                </div>
                <div class="row">

                    <div class="col-6 mt-3">
                        <h3 class="text-gray-800 ">Quantidade </h3>
                    </div>

                    <div class="col-6 mt-3">
                        <h3 class="text-gray-800 ">Preço Unitário </h3>
                    </div>
                </div>
                <div class="row">

                    <div class="col-5 mr-3">
                        <input type="text" class="form-control " style="height:60px;font-size: 24px;" id="valor">
                    </div>

                    <div class="col-5 ml-5">
                        <input type="text" class="form-control " style="height:60px;font-size:24px;width:110%;" id="valor" oninput="formatarMoeda(this)" placeholder="00,00">
                    </div>

                </div>


                <div class="row mt-3">
                    <h3 class="text-gray-800 ml-3">Total </h3>
                </div>
                <div class="row col-12 ">
                    <input type="text" class="form-control " style="height:60px;font-size: 24px;" oninput="formatarMoeda(this)" placeholder="00,00">
                </div>


            </div>

            <div class="col">
                <h3 class="text-gray-800">Resumo da venda</h3>
                <table class="table table-bordered text-gray-900">
                    <thead>
                        <tr>
                            <th scope="col">Qtd</th>
                            <th scope="col">Produto</th>
                            <th scope="col">Valor Und.</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Produto 1</td>
                            <td>R$ 10.00</td>
                            <td>R$ 10.00</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Produto 2</td>
                            <td>R$ 15.00</td>
                            <td>R$ 30.00</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Produto 3</td>
                            <td>R$ 7.50</td>
                            <td>R$ 22.50</td>
                        </tr>
                    </tbody>
                </table>

                <div class="row ml-1 justify-content-evelyn">
                    <div class="col-1 p-0">
                        <h4 class="text-gray-900 mt-3">Total</h4>
                    </div>
                    <div class="row col-4 mr-5">
                        <input type="text" class="form-control" style="height: 60px; font-size: 24px;" oninput="formatarMoeda(this)" placeholder="00,00">
                    </div>
                    <div class="row col-3 ml-5">
                        <button class="btn btn-control btn-danger">Cancelar venda</button>
                    </div>
                    <div class="row col-3 ml-1">
                         <button class="btn btn-control btn-success">[ F12 ] Pagamento</button>
                    </div>
                </div>

            </div>
        </div>

        @include('layout.parte.footer')
</body>

</html>