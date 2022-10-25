@extends('layout.layout')

<title>Página</title>
@section('conteudo')

<div class="container">


<div class="col-6 mt-2 m-auto">
    <form action="{{route('relatorio')}}" method="get">
        @csrf
    
        <div class="mt-3">
            
            <table class="table">
                <tr>
                    <th>Produto</th>
                    <th>Valor</th>
                </tr>
                @foreach($produtos as $p)
                   
                        <tr>
                            <td>{{$p->produto}}</td>
                            <td>{{$p->valor}}</td>
                            <td><a href="{{route('store', $p->id)}}">Add</a></td>
                        </tr>
                    
                @endforeach
            </table>
            
        </div>
    

        <div class="mt-5 text-center">LISTA ADICIONADOS</div>
        <table class="table">
            <tr>
                <th>Produto</th>
                <th>Valor</th>
            </tr>
            @foreach($produtos_add as $p)
               
                    <tr>
                        <td>{{$p->produto}}</td>
                        <td>{{$p->valor}}</td>
                    </tr>
                
            @endforeach
        </table>
       
        <div class="text-end mt-3">
            {{-- <a href="" class="btn btn-success mx-4">Salvar</a> --}}
              
            {{-- <a href="{{route('limpar_tudo')}}"  class=" btn btn-secondary">Limpar tudo</a> --}}

           
        </div>



        <div>
            Pagamento:
            <select name="" id="" class="form-control">
               <option value="boleto">Boleto</option>
               <option value="parcelado">Parcelado</option>
            </select>
        </div>
        

        <input type="submit" value="Visualizar" class="btn btn-success btn-md mt-3">
    </form>
</div>


</div>

<script>
    // function adicionar(){
    //     var add = document.getElementById('adicionar').value;
    //     var campo = document.getElementById('campo').value;
    //     campo = document.getElementById("campo").innerHTML += add+'\n';
    //     // alert('adicionado');

        
    // }
  
</script>
@endsection