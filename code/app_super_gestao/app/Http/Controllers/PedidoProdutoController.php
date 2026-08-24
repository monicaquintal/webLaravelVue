<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedido;
use App\Models\Produto;
use App\Models\PedidoProduto;

class PedidoProdutoController extends Controller
{
    public function index()
    {
        //
    }

    public function create(Pedido $pedido)
    {
        $produtos = Produto::all();
        // $pedido->produtos; //eager loading
        return view('app.pedido_produto.create', ['pedido' => $pedido, 'produtos' => $produtos]);
    }

    public function store(Request $request, Pedido $pedido)
    {
        $regras = [
            'produto_id' => 'exists:produtos,id',
            'quantidade' => 'required'
        ];
        $feedback = [
            'produto_id.exists' => 'O produto informado não existe!',
            'required' => 'O campo :attribute deve possuir um valor válido!'
        ];
        $request->validate($regras, $feedback);

        // $pedidoProduto = new PedidoProduto();
        // $pedidoProduto->pedido_id = $pedido->id;
        // $pedidoProduto->produto_id = $request->get('produto_id');
        // $pedidoProduto->save();

        $pedido->produtos()->attach(
            $request->get('produto_id'),
            ['quantidade' => $request->get('quantidade')]
            );

        return redirect()->route('pedido-produto.create', ['pedido' => $pedido->id]);
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

    public function destroy(Pedido $pedido, Produto $produto)
    {
        // print_r($pedido->getAttributes());
        // echo '<hr>';
        // print_r($produto->getAttributes());

        echo $pedido->id.' - '.$produto->id;

        // método convencional:
        // PedidoProduto::where([
        //     'pedido_id' => $pedido->id,
        //     'produto_id' => $produto->id
        // ])->delete();

        // método detach(): permite fazer o delete pelo relacionamento, através do belongsToMany
        $pedido->produtos()->detach($produto->id);
        // lembrando que $produto_id já é uma info pertencente ao objeto instanciado

        // também seria possível remover o relacionamento por meio do objeto Produto:
        // $produto->pedidos()->detach($pedido->id);

        return redirect()->route('pedido-produto.create', ['pedido' => $pedido->id]);
    }
}
