@extends('layout.layout')

<title>Lista</title>
@section('conteudo')

<div class="container">


    <div class="col-6 mt-2 m-auto">
        <div class="text-center text-uppercase"><b>Relatório de vendas</b></div>
        <div class="mt-3">
            
            <table class="table">
                <tr>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Cliente</th>
                    <th>Vendedor</th>
                    <th>-</th>
                </tr>
                @foreach($produtos_add as $p)
                   
                        <tr>
                            <td>{{$p->produto}}</td>
                            <td>{{$p->valor}}</td>
                            <td>{{$p->cliente}}</td>
                            <td>{{$p->vendedor}}</td>
                            <td><a href="{{route('remover', $p->id)}}">Remover</a></td>

                        </tr>
                    
                @endforeach
            </table>
            <div class="text-end">Total: 
                {{$total}}
                
            </div>
                
                
            
    
        </div>
       
    </div>
</div>
@endsection