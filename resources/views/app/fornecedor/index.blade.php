<h3> Fornecedor </h3>

{{-- Comentário que é descartado pelo interpretador do blade --}}

@php

/*
    if(empty($variavel)){ // retornar se variavel estiver vazia
        - ''
        - 0
        - 0.0
        - '0'
        - null
        - false
        - array()
        - $var

    }
*/

@endphp

{{-- @dd($fornecedores); --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br/>
    Status: {{ $fornecedores[0]['status'] }}
    <br/>
    CNPJ: {{ $fornecedores[0]['CNPJ'] ?? 'Dado não foi preenchido' }}

    {{-- 
    
        se $variavel testada não estiver definida (se não existir)
            ou
        se $variavel testada possuir valor null

        mostra a mensagem padrão
    --}}
    
@endisset
