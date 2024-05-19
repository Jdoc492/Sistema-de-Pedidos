@extends('tema.base')

@section('contenido')

    <div class="container py-5 text-center">

        @if (isset($pedido))
            <h1>Editar pedido</h1>
        @else
            <h1>Nuevo pedido</h1>
        @endif
            

        @if (Session::has('mensaje'))
            <div class="alert alert-info my-5">
                {{Session::get('mensaje')}}
            </div>
        @endif


        @if (isset($pedido))
            <form action="{{ route('pedidos.update',$pedido) }}" method="post">
            @method('PUT')
        @else
            <form action="{{ route('pedidos.store') }}" method="post">
        @endif

        
             @csrf

            <div>
                <label for="nombre_cliente" class="form-label">Nombre:</label>
                <input type="text" name="nombre_cliente" class="form-control" placeholder="Nombre del cliente" value="{{old('nombre_cliente') ?? @$pedido->nombre_cliente}}">
                <p class="form-text">Escriba el nombre del cliente</p>
                @error('nombre_cliente')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="producto" class="form-label">Producto:</label>
                <input type="text" name="producto" class="form-control" placeholder="Nombre del producto" value="{{old('producto') ?? @$pedido->producto}}">
                <p class="form-text">Escriba el nombre del producto</p>
                @error('producto')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div>
                <label for="cantidad_producto" class="form-label">Cantidad de producto:</label>
                <input type="number" name="cantidad_producto" class="form-control" placeholder="Cantidad del producto" value="{{old('cantidad_producto') ?? @$pedido->cantidad_producto}}">
                <p class="form-text">Escriba el nombre del producto</p>
                @error('cantidad_producto')
                <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            @if (isset($pedido))
            <button type="submit" class="btn btn-warning">Guardar cambios</button>

            @else
            <button type="submit" class="btn btn-warning">Guardar pedido</button>
   
            @endif


        </form>
        
    </div>
    
    
@endsection