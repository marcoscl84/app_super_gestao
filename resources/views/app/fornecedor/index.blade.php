<h3> Fornecedor </h3>

{{-- Comentário que é descartado pelo interpretador do blade --}}

@php

/*
    if( !<condicao> ){

    }
*/

@endphp

{{-- @dd($fornecedores); --}}

{{-- Unless executa se o retorno for false, como na negação do if acima --}}

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br/>
Status: {{ $fornecedores[0]['status'] }}
<br/>

@if( !($fornecedores[0]['status']) )
    Fornecedor inativo
@endif

<br/>

@unless( $fornecedores[0]['status'] == 'S') <!-- se o retorno da condição for false -->
    Fornecedor inativo
@endunless