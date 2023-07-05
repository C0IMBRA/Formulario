<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientesController extends Controller
{
    function index(){
        echo 'Index';
        exit;

    }

    function cadastrar(){
        $retorno = [];
        $retorno['carros'] = [
            'Fiat',
            'Honda',
            'Toyota',
            'Chevrolet'
            
        ];

        return view('clientes.cadastrar',$retorno);
    }

}

