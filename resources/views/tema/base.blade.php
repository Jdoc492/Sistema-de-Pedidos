<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Sistema Pedidos</title>

    <style>
        body {
            background-image: url('/imagenes/uno.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        nav {
            background-color: #ff0000c9;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
        }

        footer {
            background-color: #F5F5F5;
            color: #333333;
            text-align: center;
            padding: 10px 0;
            width: 100%;
            flex-shrink: 0;
        }

        .pagination {
            background-color: #F5F5F5; 
            justify-content: center;
        }

        .push-footer {
            flex-grow: 1;
            padding: 20px;
        }
    </style>
    
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ action('PedidoController@inicio')}}">JDOC</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav" style="padding-right: 30px">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="{{ action('PedidoController@inicio')}}">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('pedidos.index')}}">Nuevo pedido</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ action('PedidoController@mostrarMisPedidos')}}">Mis pedidos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="push-footer">
        @yield('contenido')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <footer class="bg-light text-center text-lg-start">
        <div class="text-center p-3">
            By Jose Ochoa
        </div>
    </footer>
</body>
</html>

