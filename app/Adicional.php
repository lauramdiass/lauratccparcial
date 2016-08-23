<?php

namespace App;
use App\PCD;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Adicional extends Model
{
    protected $table = 'adicional';
    public $timestamps = false;
    protected $fillable = array('descricao', 'motivo', 'nome', 'tipo', 'id_pcd');
    protected $guarded = ['id'];

    public function pcd()
    {
        return $this->belongsTo('App\PCD', 'id');
    }
}
