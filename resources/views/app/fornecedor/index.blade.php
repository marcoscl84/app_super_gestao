<h3> Fornecedor </h3>

{{-- Comentário que é descartado pelo interpretador do blade --}}

@php
    // Código puro php entre as arrobas
    echo "Teste php puro";

@endphp
<br />

{{ 'Texto teste entre chaves' }} 
<br />
<?php echo 'Texto teste entre tags php' ?>

<br  /><br />

{{-- @dd($fornecedores) // verifica retorno --}}

{{-- ---------------------- --}}


            
      
            
            {{-- IF ELSE --}}
@php

 /*   if() {

    } elseif() {

    } else {

    } */

@endphp

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3> Existem alguns fornecedores cadastrados </h3>
@elseif(count($fornecedores) > 10)
    <h3> Existem vários fornecedores </h3>
@else
    <h3> Ainda não existem forncedores cadastrados </h3>
@endif

<br><br><hr>

            
            
            
            
            
            
            
            
            
            {{-- UNLESS (é a inversão do if / executa se o retorno for falso) --}}
@php
    /*
    if(<condicao>){} // executa se retorno for true
    */
@endphp

Fornecedor: {{ $fornecedores[0]['nome'] }}
<br>
Status: {{ $fornecedores[0]['status'] }}

@if(!($fornecedores[0]['status'] == 'N'))
    Fornecedor inativo
@endif
<br>
@unless($fornecedores[0]['status'] == 'S')
    Fornecedor Inativo
@endunless

<br><br><hr>







            {{-- ISSET e EMPTY --}}
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br> 
    Status: {{ $fornecedores[0]['status'] }}
    <br>

    @isset($fornecedores[0]['cnpj'])
        CNPJ: {{ $fornecedores[0]['cnpj']}}

                {{-- EMPTY --}}
        @empty($fornecedores[0]['cnpj'])
            CNPJ: vazio
        @endempty
    @endisset
    <br><br>

    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br> 
    Status: {{ $fornecedores[1]['status'] }}
    <br>

    @isset($fornecedores[1]['cnpj'])
        CNPJ: {{ $fornecedores[1]['cnpj']}}

                {{-- EMPTY --}}
        @empty($fornecedores[1]['cnpj'])
             vazio
        @endempty
    @endisset
    <br>
@endisset
<br><br><hr>

            {{-- ISSET e DEFAULT --}}
@isset($fornecedores)
    Fornecedor: {{ $fornecedores[0]['nome'] }}
    <br> 
    Status: {{ $fornecedores[0]['status'] }}
    <br>

    {{-- DEFAULT se variável não setada ou null --}}
    CNPJ: {{ $fornecedores[0]['cnpj'] ?? 'Dado não preenchido' }}
    <br><br>


    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br> 
    Status: {{ $fornecedores[1]['status'] }}
    <br>

    {{-- DEFAULT se variável não setada ou null --}}
    CNPJ: {{ $fornecedores[1]['cnpj'] ?? 'Dado não preenchido' }}
    <br><br>

    <br>
@endisset





            