<nav class="navbar navbar-expand navbar-light topbar mb-4 static-top  checked-day modo-diurno" style="height: 9%;">
    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
        <i class="fa fa-bars"></i>
    </button>
    <ul class="navbar-nav ml-4 row">
        <li href="" class="nav-item dropdown no-arrow ml-2  navbar-efect">
            <a href="{{route('ponto.de.venda')}}" class="nav-link efeito dropdown-toggle text-gray-800 checked-day-a " id="userDropdown" role="button"><img src="img/ponto-venda.png" class="mr-2" style="width:32px;height:32px;"> Ponto de venda
            </a>
        </li>
        <li class="nav-item  dropdown no-arrow ml-5 navbar-efect">
            <a class="nav-link efeito dropdown-toggle text-gray-800 checked-day-a" id="userDropdown " role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/financa.png" class="mr-2">Financeiro
            </a>
        </li>
        <li class="nav-item dropdown no-arrow ml-5 navbar-efect">
            <a class="nav-link efeito dropdown-toggle text-gray-800 checked-day-a" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/estoque.png" class="mr-2">Produtos
            </a>
            <ul class="dropdown-menu bg-dark">
                <li class="nav-item bg-dark "><a class="nav-link dropdown-toggle" href="produtos-estoque.php">Estoque</a></li>
                <li class="nav-item bg-dark "><a class="nav-link dropdown-toggle" href="produtos.php">Produtos</a></li>
                <li class="nav-item bg-dark "><a class="nav-link dropdown-toggle" href="historico-php">Histórico</a></li>
            </ul>
        </li>
        <li class="nav-item dropdown no-arrow ml-5 navbar-efect modo-diurno checked-day">
            <a class="nav-link efeito dropdown-toggle text-gray-800 checked-day-a" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/trofeu.png" class="mr-2">Mais vendidos</a>
        </li>
        <li class="nav-item dropdown no-arrow ml-5 mr-5 navbar-efect modo-diurno checked-day">
            <a class="nav-link efeito dropdown-toggle text-gray-800 checked-day-a" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="img/toque.png" class="mr-2">Aplicativo</a>
        </li>
        <div class="principal" style="margin-left:185px;">
            <div class=" main-button mt-3">
                <input type="checkbox" id="toggle">
                <label for="toggle" class="button-checked"></label>
            </div>
        </div>
        <li>
        </li>
        <li class="nav-item dropdown no-arrow  col align-self-end modo-diurno checked-day" style="margin-left:48px;">
            <a class="nav-link efeito dropdown-toggle text-gray-800 checked-day-a" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none  d-lg-inline  small  ">Olá,
                    <?php /* echo $_SESSION["nome"] */?>
                </span>
                <img class="img-profile rounded-circle" src="img/<?php /* echo $_SESSION["foto"]; */ ?>">
            </a>
            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="sair.php">
                    <i class="fas fa-user-cog mr-2 text-gray-400"></i>
                    Alterar usuário
                </a>
                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    Sair
                </a>
            </div>
        </li>
    </ul>
</nav>