<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\User;

class LoginController extends Controller {
    public function index(Request $request, $erro = null) {
        if ($erro == 1) {
            $mensagem = 'Usuário e/ou senha não existe!';
        } else {
            $mensagem = '';
        }

        return view('site.login', [
            'titulo' => 'Login',
            'erro' => $mensagem
        ]);
    }

    public function autenticar(Request $request) {
    
        // regras de validação
        $regras = [
            'usuario' => 'email',
            'senha' => 'required'
        ];

        // mensagens de feedback de validação
        $feedback = [
            'usuario.email' => 'O campo usuário (e-mail) é obrigatório!',
            'senha.required' => 'O campo senha é obrigatório!'
        ];

        // se não passar pelo validate
        $request->validate($regras, $feedback);

        // recuperando os parâmetros do formulário
        $email = $request->get('usuario');
        $password = $request->get('senha');

        echo "Usuário: $email | Senha: $password";
        echo '<br>';

        // iniciar o Model User
        $user = new User();

        $usuario = $user->where('email', $email)
        ->where('password', $password)
        ->get()
        ->first();

        if(isset($usuario->name)) {
            echo "Usuário encontrado: $usuario->name!";
        } else {
            return redirect()->route('site.login', ['erro' => 1]);
        }
    }
}