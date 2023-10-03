<h3> Fornecedor </h3>

{{-- Comentário que é descartado pelo interpretador do blade --}}

@php



@endphp

{{-- @ antes das chaves, imprime tudo que vem em seguida da @ como string, sem interpretar a variável --}}

@isset($fornecedores)
    
    @forelse ($fornecedores as $indice => $fornecedor)

        Fornecedor: @{{ $fornecedor['nome'] }}
        <br/>
        Status: @{{ $fornecedor['status'] }}
        <br/>
        CNPJ: @{{ $fornecedor['cnpj'] ?? '' }}
        <br/>
        Telefone: (@{{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr/>
    
    @empty
        Não existem fornecedores cadastrados
    @endforelse


    

@endisset

<br/>


