<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('tittle')</title>

    <!-- Bootstrap y Jquery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Archivos propios -->
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">

    <!-- Fonts -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    

    <!-- Apartado para importar en herencia -->
    @yield('import')

</head>

<body>
    <!-- Header -->
    @yield('nav')
    <!-- Content -->
    <div class="container-fluid pt-4">
        @yield('contenido')
    </div>
    <!-- Footer -->
    <footer class="text-center pie-pagina footer">
        Copyright &copy; 2021 <span style="color: blue" ;>ProductoSoftware</span>. Todos los derechos reservados.
    </footer>

    <!-- Script -->
</body>

</html>
