<h3> Fornecedor </h3>

{{-- Comentário que é descartado pelo interpretador do blade --}}

@php



@endphp

{{-- @dd($fornecedores); --}}

@isset($fornecedores)
    
    @foreach ($fornecedores as $indice => $fornecedor)

        Fornecedor: {{ $fornecedor['nome'] }}
        <br/>
        Status: {{ $fornecedor['status'] }}
        <br/>
        CNPJ: {{ $fornecedor['cnpj'] ?? '' }}
        <br/>
        Telefone: ({{ $fornecedor['ddd'] ?? '' }}) {{ $fornecedor['telefone'] ?? '' }}
        <hr/>

    @endforeach


    

@endisset

<br/>


