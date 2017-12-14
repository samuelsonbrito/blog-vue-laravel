@extends('layouts.app')

@section('content')
    <my-pagina tamanho="10">

                <my-painel titulo="Painel">
                

                <div class="row">

                    <div class="col-md-4">


                        <my-caixa titulo="Artigos" qtd="33" cor="orange" icone="fa fa-pie-chart" url="{{ route('artigos.index') }}">
                        </my-caixa>                    
                    
                    </div>   


                    <div class="col-md-4">

                        <my-caixa titulo="Usuários" qtd="3" cor="blue" icone="ion-person-stalker">
                        </my-caixa>                    
                    
                    </div>   


                    <div class="col-md-4">

                        <my-caixa titulo="Autores" qtd="2" cor="red" icone="fa fa-user">
                        </my-caixa> 
                    </div>                
                
                </div>
                
                </my-painel>
    
    </my-pagina>
@endsection
