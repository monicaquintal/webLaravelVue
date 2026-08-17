<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Unidade;
use App\Models\ProdutoDetalhe;

class ProdutoDetalheController extends Controller
{
    public function index()
    {
        //
    }

    public function create()
    {
        $unidades = Unidade::all();
        return view ('app.produto_detalhe.create', ['unidades' => $unidades]);                                                                                                                                                                                                                                                                                  
    }

    public function store(Request $request)
    {
        ProdutoDetalhe::create($request->all());
        return 'Cadastro realizado com sucesso!';
    }

    public function show(string $id)
    {
        //
    }

 
    public function edit(ProdutoDetalhe $produtoDetalhe)
    {
        $unidades = Unidade::all();
        return view('app.produto_detalhe.edit', ['produto_detalhe' => $produtoDetalhe, 'unidades' => $unidades]);
    }

    public function update(Request $request, ProdutoDetalhe $produtoDetalhe)
    {
        $produtoDetalhe->update($request->all());
        echo 'Atualização realizada com sucesso!'; 
    }

    public function destroy(string $id)
    {
        //
    }
}
