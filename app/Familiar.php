<?php

namespace App;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Familiar extends Model
{
    protected $table = 'familiar';
    public $timestamps = false;
    protected $fillable = array('cpf', 'data_nascimento', 'dependente', 'escolaridade', 'estado_civil', 'mae', 'nis', 'nome', 'pai', 'parentesco', 'profissao', 'renda', 'rg', 'sexo');
    protected $guarded = ['id'];

    public function pcds()
    {
        return $this->belongsToMany('App\PCD', 'pcd_familiar',  'id_familiar');
    }

}
