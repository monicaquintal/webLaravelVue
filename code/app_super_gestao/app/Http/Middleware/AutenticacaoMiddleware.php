<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    public function handle(Request $request, Closure $next, $metodo_autenticacao, $perfil): Response
    {
        // verifica se o usuário possui acesso à rota:
            echo $metodo_autenticacao.' - '.$perfil.'<br>';

            if($metodo_autenticacao == 'padrao') {
                echo 'Verificar usuário e senha no BD!'.$perfil.'<br>';
            }

            if($metodo_autenticacao == 'ldap') {
                echo 'Verificar usuário e senha no AD!'.$perfil.'<br>';
            }

            if($perfil == 'visitante') {
                echo 'Exibir apenas alguns recursos, pois é '.$perfil.'<br>';
            } else {
                echo 'Carregar o perfil '.$perfil.' do banco de dados! <br>';
            }

            if(false) {
            return $next($request);
            } else {
            return Response('Acesso negado! A rota exige autenticação!!!');
            }
    }
}
