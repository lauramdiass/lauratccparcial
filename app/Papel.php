<?php

namespace App;


use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Papel extends Model
{
    protected $table = 'papel';
    public $timestamps = false;
    protected $fillable = array('descricao');
    protected $guarded = ['id'];

    public function users()
    {
        return $this->belongsToMany('App\User', 'id');
    }

}
