@extends('layout.layout')

<title>Inicio</title>
@section('conteudo')

<div class="container">


    
<div class="col-4 mt-5 m-auto">
    <form action="{{route('acesso')}}" method="post">
        @csrf
        Usuário:<input type="text" name="usuario" id="" class="form-control">
        Senha: <input type="password" name="senha" id="" class="form-control">

        <input type="submit" value="Entrar" class="btn btn-md btn-success mt-4">
    </form>

    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</div>



</div>
@endsection