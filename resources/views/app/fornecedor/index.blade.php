<h3> Fornecedor </h3>

{{-- Comentário que é descartado pelo interpretador do blade --}}

@php



@endphp

{{-- @dd($fornecedores); --}}

@isset($fornecedores)
    
    @forelse ($fornecedores as $indice => $fornecedor)

        Fornecedor: {{ $fornecedor['nome'] }}
        <br/>
        Status: {{ $fornecedor['status'] }}
        <br/>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br/>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr/>
    
    @empty
        Não existem fornecedores cadastrados
    @endforelse


    

@endisset

<br/>


