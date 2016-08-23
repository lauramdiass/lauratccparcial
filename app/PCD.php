<?php

namespace App;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PCD extends Model
{
    protected $table = 'pcd';
    public $timestamps = false;
    protected $fillable = array('ativo', 'cpf', 'data_nascimento', 'id_endereco', 'lista_espera', 'nis', 'nome', 'rg', 'sexo');
    protected $guarded = ['id'];

    public function endereco()
    {
        return $this->belongsTo('App\Endereco', 'id');
    }

    public function contato()
    {
        return $this->hasOne('App\Contato', 'id_pcd');
    }

    public function tratamentos()
    {
        return $this->hasMany('App\Tratamento', 'id_pcd');
    }

    public function adicionais()
    {
        return $this->hasMany('App\Adicional', 'id_pcd');
    }

    public function familiares()
    {
        return $this->belongsToMany('App\Familiar', 'pcd_familiar', 'id_pcd');
    }

}

