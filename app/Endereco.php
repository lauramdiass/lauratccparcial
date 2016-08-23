<?php

namespace App;

use App\Models\PCD;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Endereco extends Model
{
    protected $table = 'endereco';
    public $timestamps = false;
    protected $fillable = array('bairro', 'cidade', 'estado', 'material_moradia', 'numero', 'rua', 'tipo_moradia');
    protected $guarded = ['id'];

    public function pcds()
    {
        return $this->hasMany('App\PCD', 'id_endereco');
    }
}
