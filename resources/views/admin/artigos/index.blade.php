@extends('layouts.app')

@section('content')
    <my-pagina tamanho="11">

        <my-painel titulo="Lista de Artigos">
                
            <a href="">Criar</a>
                
            <table class="table table-striped table-hover">

            <thead>

                <tr>
                
                    <th>#</th>
                    <th>Título</th>
                    <th>Descrição</th>
                    <th>Autor</th>
                    <th>Data</th>
                    <th>Ação</th>
                
                </tr>

            </thead>
            

            <tbody>

                <tr>
                
                    <td>1</td>
                    <td>Petrus Logus</td>
                    <td>Um história de aventuras</td>
                    <td>Augusto Cury</td>
                    <td>01/01/2016</td>
                    <td>
                        <a href="#">Editar</a>
                        <a href="#">Deletar</a>
                    </td>
                
                </tr>

                <tr>
                
                    <td>1</td>
                    <td>Petrus Logus</td>
                    <td>Um história de aventuras</td>
                    <td>Augusto Cury</td>
                    <td>01/01/2016</td>
                    <td>
                        <a href="#">Editar</a>
                        <a href="#">Deletar</a>
                    </td>
                
                </tr>            
            
            </tbody>

            
            </table>
                
        </my-painel>
    
    </my-pagina>
@endsection
