@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                
                <my-painel titulo="Painel">
                

                <div class="row">

                    <div class="col-md-4">


                        <my-caixa titulo="Conteúdo 1" qtd="69" cor="orange" icone="fa fa-shopping-cart">
                            1
                        </my-caixa>                    
                    
                    </div>   


                    <div class="col-md-4">


                        <my-painel titulo="Conteúdo 2" cor="info">
                            2
                        </my-painel>                    
                    
                    </div>   


                    <div class="col-md-4">


                        <my-painel titulo="Conteúdo 3">
                            3
                        </my-painel>                    
                    
                    </div>                
                
                </div>
                
                </my-painel>

            </div>
        </div>
    </div>
@endsection
