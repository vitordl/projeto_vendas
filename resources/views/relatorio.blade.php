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
                <span id="total">{{$total}}</span>
                
            </div>


            <div>Quantas parcelas?</div>
            
                <select name="parcela" id="parcela">
                    <option value="1">1x</option>
                    <option value="2">2x</option>
                    <option value="3">3x</option>
                    <option value="10">10x</option>
                </select>
                <div class="mt-2"><a href="" class="btn btn-success" onclick="parcelas()">Simular parcelas</a></div>
            
            
                
            
            
    
        </div>
       
    </div>
</div>

<script>
     function parcelas(){
        var add = document.getElementById('parcela').value;
       
        var total = document.getElementById('total').innerHTML;
        total = total / add 
        total = total.toFixed(2)
        alert(total+' x'+ add+' sem juros')
        
    }
</script>
@endsection