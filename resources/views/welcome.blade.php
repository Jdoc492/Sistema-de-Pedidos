@extends('tema.base')

@section('contenido')

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Pedidos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container py-5 text-center">
        <img src="{{ asset('imagenes/img.png') }}" alt="Imagen de Bienvenida" style="max-width: 300px;">
        <h1 class="mt-3">¡Bienvenido al Sistema de Pedidos!</h1>
        <p class="lead">Encuentra los mejores productos y realiza tus pedidos de manera sencilla.</p>
        <a href="{{ route('pedidos.index')}}" class="btn btn-danger" style="background-color:#ff0000c9">Hacer un Pedido</a>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

    
    
@endsection
