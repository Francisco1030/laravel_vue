@extends('layouts.app')

@section('content')
<pagina tamanho="10">
    <painel titulo="Lista de artigos">
        <modal-link 
            tipo="link" titulo="Modal Novo"
            nome="meumodal"
        ></modal-link>
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
        <tabela-lista 
            v-bind:titulos="['#','Titulo', 'Descrição']"
            v-bind:itens="[[1,'PHP OO', 'Curso de PHP'], [2,'VUE OO', 'Curso de VUE']]"
            criar="#criar" editar="#editar" detalhe="#detalhe" token="dds"
            ordem="desc" ordemCol="0"
            >
            
        </tabela-lista>
    </painel>
</pagina>
<modal nome="meumodal"></modal>

@endsection
