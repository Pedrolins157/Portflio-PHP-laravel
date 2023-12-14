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
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>

<body style="background-color: #8EC5FC;background-image: linear-gradient(62deg, #8EC5FC 0%, #E0C3FC 100%);">
    <div class="container card-1 ">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 w-100  shadow-lg my-5" style="border-radius:125px 15px 135px 15px;">
                    <div class="card-body p-0">
                        <div class="row align-items-center mx-auto " style="height: 55vh;">
                            <div class="col-6" style="background-image: url('img/fundo-abstrato.jpeg'); background-size: cover; background-position: center; height: 55vh;">
                            </div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class=" text-gray-900 mb-4">Login </h1>
                                        <H5>Seja Bem-Vindo(a)!</H5>
                                    </div>
                                    <form  action="{{route('login.auth')}}" method="POST">
                                        @csrf
                                        <div class="form-group">
                                            <input type="email" required name="email" class="form-control form-control-user"  aria-describedby="emailHelp" placeholder="Digite seu email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" required name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Digite sua senha">
                                        </div>
                                        <button type="submit" class="bn632-hover bn20">Entrar</button>
                                        <script>
                                            urlLogin = '{{ route("login") }}';
                                        </script>
                                    </form>
                                    <hr>
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
    <footer class="sticky-footer ">
        
        <script src="{{url('js/jquery.min.js')}}"></script>
        <script src="{{url('js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{url('js/jquery.easing.min.js')}}"></script>
        <script src="{{url('js/script.js')}}"></script>
        <script src="{{url('js/sb-admin-2.min.js')}}"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <div class="container my-auto ">
            <div class="copyright text-center my-auto ">
                <span class="text-light"><b>Copyright &copy; </b>Pedro & Josiane Lins - Se amam!</span>
            </div>
        </div>
    </footer>
</body>
@yield('js')

</html>