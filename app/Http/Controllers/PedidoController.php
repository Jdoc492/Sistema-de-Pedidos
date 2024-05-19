<?php

namespace App\Http\Controllers;

use App\Models\pedido;
use Illuminate\Http\Request;

class PedidoController extends Controller
{
  
    public function index()
    {
        return view('pedidos.index');
    }

    public function mostrarMisPedidos()
    {
        $pedidos = Pedido::paginate(5);
        return view('pedidos.misPedidos')
                ->with('pedidos',$pedidos);
    }


    public function create()
    {
        return view('pedidos.welcome');
    }

    public function inicio()
    {
        return view('welcome');
    }




    public function store(Request $request)
    {
        $request->validate([
            'nombre_cliente' => 'required|max:30',
            'producto' => 'required|max:15',
            'cantidad_producto' => 'required|gte:1'

        ]);

        $pedido = Pedido::create($request->only('nombre_cliente','producto','cantidad_producto'));

        session()->flash('mensaje','¡Se ha realizado el pedido de manera exitosa!');
        return redirect()->route('pedidos.index');
    }




    public function show(pedido $pedido)
    {
        //
    }

    public function edit(pedido $pedido)
    {
        return view('pedidos.index')->with('pedido',$pedido);
    }


    public function update(Request $request, pedido $pedido)
    {
        $request->validate([
            'nombre_cliente' => 'required|max:30',
            'producto' => 'required|max:15',
            'cantidad_producto' => 'required|gte:1'

        ]);

        $pedido->nombre_cliente = $request['nombre_cliente'];
        $pedido->producto = $request['producto'];
        $pedido->cantidad_producto = $request['cantidad_producto'];
        $pedido->save();

        session()->flash('mensaje','¡Se ha editado el pedido de manera exitosa!');
        return redirect()->action('PedidoController@mostrarMisPedidos');
    }


    public function destroy(pedido $pedido)
    {
        $pedido->delete();
        session()->flash('mensaje','¡Se ha eliminado el pedido de manera exitosa!');
        return redirect()->action('PedidoController@mostrarMisPedidos');
    }
}
