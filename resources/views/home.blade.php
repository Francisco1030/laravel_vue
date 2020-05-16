@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-8 col-md-offset-2">
        <painel titulo="Pagina inicial">
            Teste do container
            <div class="row">
                <div class="col-md-4">
                    <painel titulo="Pagina inicial" cor="orange">
                        Teste do container
                    </painel>                
                </div>

               <div class="col-md-4">
                    <painel titulo="Pagina inicial" cor="panel-danger">
                        Teste do container
                    </painel>                
                </div>

                <div class="col-md-4">
                    <painel titulo="Pagina inicial" cor="panel-danger">
                        Teste do container
                    </painel>                
                </div>
            </div>
            
        </painel>
      </div>
    </div>
  </div>
@endsection
