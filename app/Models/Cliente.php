<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'idade',
        'saldo',
        'sexo'
    ];

    public function index(){
        return self::get();
    }
    public function visualizar($id){
        return self::find($id);
    }
    public function editar($dados, $id){
        $editar = self::find($id);
        if(!empty($editar)){
            unset($dados['_token']);
            $editar->fill($dados);
            $editar->save();
            return "Cliente editado!";
        }
    }
    public function adicionar($dados){
        unset($dados['_token']);
        self::create($dados);
        return "Cliente cadastrado!";
    }
    public function deletar($id){
        $deletar = self::find($id);
        $deletar->delete();
        return "Cliente excluido!";
    }
}