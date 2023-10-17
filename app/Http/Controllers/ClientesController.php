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

    public function adicionar(request $post){   
        if($post->isMethod('POST')){
            $Cliente = new Cliente;
            $Cliente->adicionar($post->input());
            return redirect()->route('clientes.index')->with('mensagem', 'Cliente cadastrado!');
        }
        return view('clientes.adicionar');
    }

    public function editar(request $dados, $id){
        if($dados->isMethod('POST')){
            $Cliente = new Cliente;
            $Cliente->editar($dados->input(), $id);
            return redirect()->route('clientes.index')->with('mensagem', 'Cliente editado!');
        }
        $Cliente = new Cliente;
        $retorno['cliente'] = $Cliente->visualizar($id);
        return view('clientes.editar', $retorno);
    }

    public function visualizar($id){
        $Cliente = new Cliente;
        $retorno['cliente'] = $Cliente->visualizar($id);
        return view('clientes.visualizar', $retorno);
    }

    public function deletar($id){
        $Cliente = new Cliente;
        $retorno['cliente']= $Cliente->deletar($id);
        return redirect()->route('clientes.index', $retorno)->with('mensagem', 'Cliente excluido!');
    }
}

