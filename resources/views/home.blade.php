@extends('layouts.app')

@section('content')
<pagina tamanho="7">
     <painel titulo="Pagina inicial">
            Teste do container
            <div class="row">
                <div class="col-md-4">
                    <caixa qtd="200" titulo="Artigos" cor="#4fc08d"
                            url="{{ route('artigos.index') }}" icone="ion ion-pie-graph"></caixa>
                </div>

                <div class="col-md-4">
                    <caixa qtd="200" titulo="Artigos" cor="#4fc08d"
                            url="" icone="ion ion-pie-graph"></caixa>
                </div>

                <div class="col-md-4">
                    <caixa qtd="200" titulo="Artigos" cor="#4fc08d"
                            url="" icone="ion ion-pie-graph"></caixa>
                </div>
               
            </div>
        </painel>
</pagina>

@endsection
