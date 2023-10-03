<h3> Fornecedor </h3>

{{-- Comentário que é descartado pelo interpretador do blade --}}

@php



@endphp

{{-- @dd($fornecedores); --}}

@isset($fornecedores)
    
    @php $i = 0 @endphp
    @while(isset($fornecedores[$i]))
        Fornecedor: {{ $fornecedores[$i]['nome'] }}
        <br/>
        Status: {{ $fornecedores[$i]['status'] }}
        <br/>
        CNPJ: {{ $fornecedores[$i]['CNPJ'] ?? 'Dado não foi preenchido' }}
        <br/>
        Telefone: ({{ $fornecedores[$i]['ddd'] ?? '' }}) {{ $fornecedores[$i]['telefone'] ?? '' }}
        <hr/>
        @php $i++ @endphp
    @endwhile  
    

@endisset

<br/>


