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

                 

                    @yield('content')

                </div>
            </div>

            @include('layout.parte.footer')
            @include('layout.modal.modal')

        </div>

    </div>
</body>
@yield('js')
</html>