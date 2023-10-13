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
        'saldo'
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
            // dd($dados);

            $editar->fill($dados);
            $editar->save();
            return 1;
        }
    }
    public function adicionar($dados){
        unset($dados['_token']);
        self::create($dados);
        return 1;
    }
}
