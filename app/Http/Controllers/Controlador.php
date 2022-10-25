<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use App\Models\ProdutosAdicionados;
use App\Models\Usuarios;
use CreateUsuariosTable;
use Illuminate\Http\Request;

class Controlador extends Controller
{
   
    public function index()
    {

        return view('inicio');
    }


    public function acessar(Request $request){

       
        $validated = $request->validate([
            'usuario' => 'required|min:3',
            'senha' => 'required|min:3',
        ]);

        $usuario = $request->input('usuario');
        $senha = $request->input('senha');
        
        $usuarioDB = Usuarios::where('usuario', $usuario)->first();

    //    echo $usuarioDB->senha;
        if(isset($usuarioDB)){
            if($usuarioDB->usuario == $usuario && $usuarioDB->senha == $senha){
                $request->session()->put('logado', $usuario);
                return view('acesso', ['user'=>$usuarioDB->usuario]);

            }else{
                return redirect()->route('inicio');
            }
        }else{
            return redirect()->route('inicio');
        }
                
    }

    public function sistema(Request $request){
        // $cliente = $request->input("cliente");
        // echo $cliente;

        // $request->session()->put('cliente', $cliente);

        $produtos = Produtos::get();
        $produtos_add = ProdutosAdicionados::get();

    
        return view('sistema', ['produtos' => $produtos], ['produtos_add' => $produtos_add]);
        


    }

    public function lista(){
        $produtos_add = ProdutosAdicionados::get();
        $total = ProdutosAdicionados::sum('valor');

        return view('lista', ['produtos_add' => $produtos_add], ['total'=> $total]);
        

    }


    public function store(Request $request, $produto_id=1){

        $usuario_logado = $request->session()->get('logado');
      
        $produtos = Produtos::find($produto_id);

        // $cliente = $request->session()->get('cliente');

        $produtos_add = new ProdutosAdicionados();
        $produtos_add->produto = $produtos->produto;
        $produtos_add->valor = $produtos->valor;
        $produtos_add->cliente = 'cliente';
        $produtos_add->vendedor = $usuario_logado;
        $produtos_add->created_at = now();
        $produtos_add->updated_at = now();
    
        $produtos_add->save();

        return redirect()->route('sistema');
    }

    

    public function limparTudo(){
        ProdutosAdicionados::truncate();
        return redirect()->route('sistema'); 
    }

    public function remover($id){
        $produtos_add = ProdutosAdicionados::find($id);
        $produtos_add->delete();

        return redirect()->route('relatorio');
    }


    public function relatorio(){
        $produtos_add = ProdutosAdicionados::get();
        $total = ProdutosAdicionados::sum('valor');

        return view('relatorio', ['produtos_add' => $produtos_add],['total'=> $total]);

       
        
        
    }



    
}
