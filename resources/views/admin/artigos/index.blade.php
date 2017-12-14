@extends('layouts.app')

@section('content')
    <my-pagina tamanho="11">

        <my-painel titulo="Lista de Artigos">
                
           <my-tabela-lista
            v-bind:titulos="['#','Título','Descrição','Autor','Data']"
            v-bind:itens="[['1','PHP OO','Curso de PHP','Pablo Dall Oglio','01/01/2017'],['2','VueJS','Curso de VueJS','Rockfeller','03/04/2017']]"
            criar="#criar" detalhe="#detalhe" editar="#editar" deletar="#deletar" token="545345345235"
            >
           </my-tabela-lista>
                
        </my-painel>
    
    </my-pagina>
@endsection
