@extends('tema.base')

@section('contenido')

<div class="container py-5 text-center">

    <h1>Mis Pedidos</h1>

    @if (Session::has('mensaje'))
        <div class="alert alert-info my-5">
            {{ Session::get('mensaje') }}
        </div>
    @endif

    <div class="row">
        @forelse ($pedidos as $pedido)
        <div class="col-md-10 col-lg-12 mb-4 d-flex justify-content-center">
            <div class="card h-100 border rounded shadow" style="width: 80%">
                <div class="card-body align-items-start" style="text-align: left">
                    <h5 class="card-title">{{ $pedido->nombre_cliente }}</h5>
                    <p class="card-text">Producto: {{ $pedido->producto }}</p>
                    <p class="card-text">Cantidad: {{ $pedido->cantidad_producto }}</p>
                </div>
                <div class="card-footer d-flex justify-content-end">
                    <a href="{{ route('pedidos.edit', $pedido) }}" class="btn btn-warning mx-2">Editar</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#eliminarModal{{ $pedido->id }}">Eliminar</button>
                </div>
            </div>
        </div>
        
        <!-- Modal de Eliminación -->
        <div class="modal fade" id="eliminarModal{{ $pedido->id }}" tabindex="-1" aria-labelledby="eliminarModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="eliminarModalLabel">Confirmar Eliminación</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
                    </div>
                    <div class="modal-body">
                        ¿Estás seguro de eliminar el pedido de {{ $pedido->nombre_cliente }}?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <form action="{{ route('pedidos.destroy', $pedido) }}" method="post">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
        @empty
        <div class="col-md-12" >
            <p class="form-text">No hay pedidos actualmente.</p>
        </div>
        @endforelse
    </div>
    
    
    <div>
        @if ($pedidos->count())
            {{ $pedidos->links() }}
        @endif
    </div>

</div>

@endsection



