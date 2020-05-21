@extends('layouts.app')

@section('content')
<pagina tamanho="10">
    <painel titulo="Lista de artigos">
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
        <tabela-lista 
            v-bind:titulos="['#','Titulo', 'Descrição']"
            v-bind:itens="{{ $listaArtigos }}"
            criar="#criar" editar="#editar" detalhe="#detalhe" token="dds"
            ordem="desc" ordemCol="0"
            modal="sim"
            >
            
        </tabela-lista>
    </painel>
</pagina>

<modal nome="adicionar">
     <painel titulo="Lista de artigos">
        <formulario
            css=""
            action="#"
            method="post"
            enctype=""
            token=""
        >
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" placeholder="Titulo">
        </div>

        <div class="form-group">
            <label for="descricao">Descição</label>
            <input type="text" class="form-control" id="descricao" placeholder="Descrição">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

        </formulario>
     </painel>
</modal>

<modal nome="editar">
     <painel titulo="Editar">
        <formulario
            css=""
            action="#"
            method="post"
            enctype=""
            token=""
        >
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" placeholder="Titulo">
        </div>

        <div class="form-group">
            <label for="descricao">Descição</label>
            <input type="text" class="form-control" id="descricao" placeholder="Descrição">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

        </formulario>
     </painel>
</modal>

<modal nome="detalhes">
     <painel titulo="Lista de artigos">
        <formulario
            css=""
            action="#"
            method="post"
            enctype=""
            token=""
        >
        <div class="form-group">
            <label for="titulo">Titulo</label>
            <input type="text" class="form-control" id="titulo" placeholder="Titulo">
        </div>

        <div class="form-group">
            <label for="descricao">Descição</label>
            <input type="text" class="form-control" id="descricao" placeholder="Descrição">
        </div>

        <button type="submit" class="btn btn-primary">Enviar</button>

        </formulario>
     </painel>
</modal>

@endsection
