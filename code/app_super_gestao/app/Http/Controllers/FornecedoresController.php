<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fornecedor;

class FornecedoresController extends Controller
{
    public function index() {
        return view('app.fornecedor.index');
    }

    public function listar(Request $request) {

        $fornecedores = Fornecedor::with(['produtos'])->where('nome', 'like', '%'.$request->input('nome').'%')
            ->where('site', 'like', '%'.$request->input('site').'%')
            ->where('uf', 'like', '%'.$request->input('uf').'%')
            ->where('email', 'like', '%'.$request->input('email').'%')
            ->paginate(5);
        
        return view('app.fornecedor.listar', ['fornecedores' => $fornecedores, 'request' => $request->all()]);
    }

    public function adicionar(Request $request) {

        $mensagem = '';

        // inclusão de registro
        if($request->input('_token') != '' && $request->input('id') == '') {
            // validação dos dados
            $regras = [
                'nome' => 'required|min:3|max:40',
                'site' => 'required',
                'uf' => 'required|min:2|max:2',
                'email' => 'email'
            ];

            // configuração das mensagens de feedback de controle
            $feedback = [
                'required' => 'O campo :attribute deve ser preenchido!',
                'nome.min' => 'O campo nome deve ter no mínimo 3 caracteres!',
                'nome.max' => 'O campo nome deve ter no máximo 40 caracteres!',
                'uf.min' => 'O campo UF deve ter 2 caracteres!',
                'uf.max' => 'O campo UF deve ter 2 caracteres!',
                'email.email' => 'O campo e-mail não foi preenchido corretamente!'
            ];

            // aplicação da validação
            $request->validate($regras, $feedback);

            $fornecedor = new Fornecedor();
            $fornecedor->create($request->all());
            
            // mensagem de sucesso
            $mensagem = 'Cadastro realizado com sucesso!';
            }

            // edição
            if($request->input('_token') != '' && $request->input('id') != '') {
                $fornecedor = Fornecedor::find($request->input('id'));
                $update = $fornecedor->update($request->all());

                if($update) {
                    $mensagem = 'Update realizado com sucesso!';
                } else {
                    $mensagem = 'Update apresentou problemas...';
                }

                return redirect()->route('app.fornecedor.editar', ['id' => $request->input('id'), 'mensagem' => $mensagem]);
            }

        return view('app.fornecedor.adicionar', ['mensagem' => $mensagem]);
    }

    // public function editar($id, Request $request) {
    //     $fornecedor = Fornecedor::find($id);
    //     return view('app.fornecedor.adicionar', [
    //         'fornecedor' => $fornecedor,
    //         'mensagem' => $request->input('mensagem')
    //     ]);
    // }

    public function editar($id, $mensagem = '') {
        $fornecedor = Fornecedor::find($id);

        return view('app.fornecedor.adicionar', [
            'fornecedor' => $fornecedor,
            'mensagem' => $mensagem
        ]);
    }

    public function excluir($id) {
        Fornecedor::find($id)->delete();

        return redirect()->route('app.fornecedor');
    }
}