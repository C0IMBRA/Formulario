<?php

namespace App\Http\Controllers;
use App\Models\Cliente;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    public function index(){
        $Cliente = new Cliente;
        $retorno['clientes'] = $Cliente->index();
        return view('clientes.index', $retorno);
        
    }

    public function editarDados(request $dados, $id){
        $Cliente = new Cliente;
        $Cliente->editar($dados->input(), $id);
        return redirect()->route('clientes.index');
    }

    public function adicionar(request $post){   
        if($post->isMethod('POST')){
            $Cliente = new Cliente;
            $Cliente->adicionar($post->input());
            return redirect()->route('clientes.index');
        }
        return view('clientes.adicionar');
    }

    public function editar($id){
        $Cliente = new Cliente;
        $retorno['cliente'] = $Cliente->visualizar($id);
        return view('clientes.editar', $retorno);
    }

    public function visualizar($id){
        $Cliente = new Cliente;
        $retorno['cliente'] = $Cliente->visualizar($id);
        return view('clientes.visualizar', $retorno);
    }

    public function deletar(request $dados, $id){
        $Cliente = new Cliente;
        $retorno['cliente']= $Cliente->deletar($dados->input(), $id);
        return redirect()->route('clientes.index');
    }
}

