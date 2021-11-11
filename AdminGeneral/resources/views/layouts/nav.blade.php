<nav class="navbar navbar-expand-custom navbar-mainbg sticky-top">
    <img class="size-img" src="{{ asset('imagenes/Logo.png') }}" alt="logo">
    <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false"
        aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
            <div class="hori-selector">
                <div class="left"></div>
                <div class="right"></div>
            </div>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}"><i class="fas fa-home"></i>Inicio</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);"><i class="fas fa-grip-horizontal"></i>Catalogo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/establecimientos') }}"><i class="fas fa-building"></i>Establecimiento
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/inventarios') }}"><i class="fas fa-boxes"></i>Inventario
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/articulos') }}"><i class="fas fa-tools"></i>Repuestos
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/login') }}"><i class="fas fa-user"></i>Iniciar
                    sesion</a>
            </li>
        </ul>
    </div>
</nav>

<script type="text/javascript" src="{{ asset('js/nav.js') }}"></script>