@extends('layouts.app')

@section('content')
<pagina tamanho="10">
    <painel titulo="Lista de artigos">
        <tabela-lista 
            v-bind:titulos="['#','Titulo', 'Descrição']"
            v-bind:itens="[[1,'PHP OO', 'Curso de PHP'], [2,'VUE OO', 'Curso de VUE']]"
            criar="#criar" editar="#editar" detalhe="#detalhe" token="dds"
            >
            
        </tabela-lista>
    </painel>
</pagina>

@endsection
