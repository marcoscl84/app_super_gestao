<h3> Fornecedor </h3>

{{-- Comentário que é descartado pelo interpretador do blade --}}

@php

/*
    if(isset($variavel)){

    }
*/

@endphp

{{-- @dd($fornecedores); --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br/>
    Status: {{ $fornecedores[1]['status'] }}
    <br/>
    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj']  }}
    @endisset
@endisset
