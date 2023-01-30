você está em fornecedores

{{-- fica o comentário que será descartado pelo interpretador do blade   --}}

@php
    //bloco para inserir php puro dentro das views. o motor de renderização BLADE entende que entre esses
    //blocos terá php puro

@endphp

{{--@dd($fornecedores);--}}

@if(count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif(count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3> <!-- oiiii -->
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif  