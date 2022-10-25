@extends('layout.layout')

<title>Lista</title>
@section('conteudo')

<div class="container">


    <div class="col-6 mt-2 m-auto">
    
        <div class="mt-3">
            
            <table class="table">
                <tr>
                    <th>Produto</th>
                    <th>Valor</th>
                    <th>Parcelas</th>
                </tr>
                @foreach($produtos_add as $p)
                   
                        <tr>
                            <td>{{$p->produto}}</td>
                            <td id="valor[]">{{$p->valor}}</td>
                            <td>
                                <select name="parcela" id="parcela">
                                    <option value="1">1x</option>
                                    <option value="2">2x</option>
                                    <option value="3">3x</option>
                                    <option value="10">10x</option>
                                </select>

                               <a href="" class="btn btn-success btn-sm" onclick="parcelas()">S.P</a>
                            
                            </td>
                        </tr>
                    
                @endforeach
            </table>
            <div class="text-end">Total: 
                {{$total}}
                
            </div>
                
                
            
    
        </div>
       
    </div>
</div>

<script>
    function parcelas(){
       var add = document.getElementById('parcela').value;
    
       var valor = document.getElementById('valor[]').innerHTML;
       
       valor = valor / add 
    
       valor = valor.toFixed(2)
       alert(valor+' x'+ add+' sem juros')
       
   }
</script>
@endsection