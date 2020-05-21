@extends('layouts.app')

@section('content')
<pagina tamanho="10">
    <painel titulo="Lista de artigos">
        <migalhas v-bind:lista="{{$listaMigalhas}}"></migalhas>
        <modal-link 
            tipo="link" titulo="Criar"
            nome="meumodal"
        ></modal-link>
        <tabela-lista 
            v-bind:titulos="['#','Titulo', 'Descrição']"
            v-bind:itens="{{ $listaArtigos }}"
            criar="#criar" editar="#editar" detalhe="#detalhe" token="dds"
            ordem="desc" ordemCol="0"
            >
            
        </tabela-lista>
    </painel>
</pagina>
<modal nome="meumodal">
     <painel titulo="Lista de artigos">
        <formulario
            css=""
            action="#"
            method="post"
            enctype=""
            token=""
        >
            <div class="input-group">
              <span class="input-group-addon" id="basic-addon1">@</span>
                <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
            </div>

        </formulario>
     </painel>
</modal>

@endsection
