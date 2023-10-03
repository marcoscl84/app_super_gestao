<h3> Fornecedor </h3>

{{-- Comentário que é descartado pelo interpretador do blade --}}

@php



@endphp

{{-- @dd($fornecedores); --}}

@isset($fornecedores)
    Fornecedor: {{ $fornecedores[1]['nome'] }}
    <br/>
    Status: {{ $fornecedores[1]['status'] }}
    <br/>
    CNPJ: {{ $fornecedores[1]['CNPJ'] ?? 'Dado não foi preenchido' }}
    <br/>
    Telefone: ({{ $fornecedores[1]['ddd'] ?? '' }}) {{ $fornecedores[1]['telefone'] ?? '' }}
    <br/>

    @switch($fornecedores[1]['ddd'])
        @case('51')
            Porto Algre
            @break

        @case('21')
            Rio de Janeiro
            @break

        @case('41')
            Curitiba
            @break

        @default
            Local não identificado

    @endswitch


@endisset
