@extends('layout.layout')

<title>Página</title>
@section('conteudo')

<div class="container">

<div class="text-end mt-2">
   <span class="bg-secondary text-white p-1">{{$user}}</span> 
</div>


<div class="col-6 mt-2 m-auto text-center">
   

    <form action="{{route('sistema')}}" method="get">
        Cliente<input type="text" name="cliente" required id="" class="form-control">

        <input type="submit" value="Continuar" class="mt-4 btn btn-success">
    </form>
    
</div>


</div>


@endsection