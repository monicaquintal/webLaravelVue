<h2>Site da aplicação</h2>

@auth

    <h1>Usuário autenticado</h1>
    <p>ID {{ Auth::user()->id }}</p>
    <p>Nome {{ Auth::user()->name }}</p>
    <p>Email {{ Auth::user()->email }}</p>

@endauth

@guest
    <p>Olá visitante, tudo bem?</p>
    <br>...
    <br>...
@endguest