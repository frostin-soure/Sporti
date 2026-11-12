<link rel="stylesheet" href="./estilos/navbar.css">
<style>
    @import url('https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap');
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-B/GM4XqrwHnWXNOWMbloTmrYXZg10cakYGmpfsR/bbzQ6JAJI4ihuyADKLnBgrCe" crossorigin="anonymous">


<nav class="navbar lg:navbar-expand bg-1 fg-2">
    <div class="container-fluid">
        <img class="logo" src="./brasao-nova-londrina-66x70.png" alt="" srcset="">
        <a class="navbar-brand portal" href="#"> Portal Esportivo NL</a>
        <button class="btn-icon navbar-toggler" type="button" data-bs-toggle="drawer" data-bs-target="#navbarNavMenu" aria-controls="navbarNavMenu" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon" aria-hidden="true"></span>
        </button>
        <dialog class="drawer drawer-end" tabindex="-1" id="navbarNavMenu" aria-labelledby="navbarNavMenuLabel">
            <div class="drawer-header">
                <h5 class="drawer-title" id="navbarNavMenuLabel">Portal Esportivo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="drawer" aria-label="Close"></button>
            </div>
            <div class="drawer-body">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Eventos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Sobre</a>
                    <li class="nav-item">
                        <a class="nav-link btn-agendar" href="./agendamento.php">Agendar Quadra</a>
                    </li>
            </div>
        </dialog>
    </div>
</nav>

<script type="module" src="https://cdn.jsdelivr.net/npm/bootstrap@6.0.0-alpha.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-1a/pXj49ZQ1aHEmrJ+gMw1otqoVsYwlEnlD8mIfY2TV03r20Y0CN7uqx1tQogjPL" crossorigin="anonymous"></script>