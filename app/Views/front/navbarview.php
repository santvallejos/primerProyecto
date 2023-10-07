<!--Navegacion-->
<?php
    $session = session();
    $nombre=$session->get('usuario');
    $perfil=$session->get('perfilid');
    ?>

<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="principalview">Curry Store</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!--navbar para admin-->
        <div>
            <?php if(session()->perfilid == 1): ?>
            <div class="btn btn-secondary active btnUser btn-sm">
                <a href="">ADMIN: <?php echo session('nombre'); ?> </a>
            </div>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href='registro'>Registrarse</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href='login'>Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
            </li>
            </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            </div>

            <?php elseif(session()->perfilid == 2): ?>
                <div class="btn btn-secondary active btnUser btn-sm">
                <a href="">CLIENTE: <?php echo session('nombre'); ?> </a>
            </div>
            <!--Navbar para clientes-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href='principalview'>Principal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href='quienessomos'>Quiénes Somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href='acercade'>Acerca de Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('/logout');?>" tabindex="-1" aria-disabled="true">Cerrar Sesión</a>
            </li>
            </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            </div>
            <?php else:?>

            <!--Navbar para clientes no logueados-->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href='principalview'>Principal</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href='quienessomos'>Quiénes Somos</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href='acercade'>Acerca de Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href='login'>Login</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href='registro'>Registrarse</a>
            </li>
            </ul>
            <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Buscar</button>
            </form>
            <?php endif;?>
        </div>
    </div>
</nav>