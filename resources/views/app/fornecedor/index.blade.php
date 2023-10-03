<h3> Fornecedor </h3>

{{-- Comentário que é descartado pelo interpretador do blade --}}

@php



@endphp

{{-- @ antes das chaves, imprime tudo que vem em seguida da @ como string, sem interpretar a variável --}}

@isset($fornecedores)
    
    @forelse ($fornecedores as $indice => $fornecedor)

        Iteração atual: {{ $loop->iteration }} {{-- disponível somente no foreach e forelse --}}
        {{-- @dd($loop) --}}

        <br/>
        Fornecedor: {{ $fornecedor['nome'] }}
        <br/>
        Status: {{ $fornecedor['status'] }}
        <br/>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br/>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <br/>

        @if($loop->first)
            Primeira iteração
        @endif

        @if($loop->last)
            Última iteração
            <br/>
            Total de registros: {{ $loop->count }}
        @endif
        <hr/>
    
    @empty
        Não existem fornecedores cadastrados
    @endforelse


    

@endisset

<br/>


