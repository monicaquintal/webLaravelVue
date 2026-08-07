<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AutenticacaoMiddleware
{
    public function handle(Request $request, Closure $next): Response
    {
        // verifica se o usuário possui acesso à rota:
            if(true) {
            return $next($request);
            } else {
            return Response('Acesso negado! A rota exige autenticação!!!');
            }
    }
}
