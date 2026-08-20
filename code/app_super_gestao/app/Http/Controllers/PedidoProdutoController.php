<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Produto;

class PedidoProdutoController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Pedido $pedido)
    {
        $produtos = Produto::all();
        return view('app.pedido_produto.create', ['pedido' => $pedido, 'produtos' => $produtos]);
    }

    public function store(Request $request, Pedido $pedido)
    {
        echo '<pre>';
        print_r($pedido);
        echo '</pre>';
        echo '<hr>';
        echo '<pre>';
        print_r($request->all());
        echo '</pre>';
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
