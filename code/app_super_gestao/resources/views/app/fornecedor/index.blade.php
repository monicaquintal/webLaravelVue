<h3>Fornecedor</h3>

@php
    /*
    if (empty($variavel)) {}
        retorna true se a variável estiver vazia
    */
@endphp

@isset($fornecedores)

    @forelse($fornecedores as $indice => $fornecedor)
        Iteração atual: {{ $loop -> iteration }} 
        <br>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br>
        Status: {{ $fornecedor['status'] }}
        <br>
        CNPJ: {{ $fornecedor['cnpj'] ?? 'Dado não foi preenchido' }}
        <br>
        Telefone: {{ $fornecedor['ddd'] ?? '' }} {{ $fornecedor['telefone'] ?? '' }}
        <br>
        @if($loop -> first)
            Primeira iteração do loop<br>
        @endif

        @if($loop -> last)
            Última iteração do loop
            <br>
            Total de registros: {{ $loop -> count }}
            <br>
        @endif
        <hr>
    @empty
        Não existem fornecedores cadastrados.
    @endforelse

@endisset