<ul class="navbar-nav  sidebar sidebar-dark accordion" id="accordionSidebar" style="background:#141d28;">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center mt-5" href="painel.php">
        <img src="img/logo&lins(1).png" alt="" class="m-5 " style="width:400px;height:300px;"></a>


    <!-- Divider -->
    <hr class="sidebar-divider mt-5">

    <!-- Heading -->
    <div class="sidebar-heading">
        Navegação
    </div>

    <li class="nav-item">
        <a class="nav-link " href="{{url('/')}}"> <i class="fas fa-home"> </i> <span>Home</span> </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Nav Item - Pages Collapse Menu -->


    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-user-cog"></i>
            <span>Cadastros</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">O que deseja fazer ?</h6>
                 <a class="collapse-item load-page" href="{{route('usuario.cadastrar')}}">Cadastro de funcionários</a>
                 <a class="collapse-item load-page" href="{{route('cliente.cadastrar')}}">Cadastro de Clientes</a>
                 <a class="collapse-item load-page" href="{{route('usuario.consultar')}}">Consultar cadastro</a>
                 <a class="collapse-item load-page" href="{{route('cliente.consultar')}}">Consultar Clientes</a>

            </div>
        </div>
    </li>



    <hr class="sidebar-divider d-none d-md-block">


    <!-- Nav Item - Tables -->
    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-fw fa-sign-out-alt"></i>
            <span>Sair</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>