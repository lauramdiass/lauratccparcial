<?php

namespace App;
use App\PCD;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Tratamento extends Model
{
    protected $table = 'tratamento';
    public $timestamps = false;
    protected $fillable = array('avaliado', 'data_inicio', 'tipo', 'id_pcd', 'id_user');
    protected $guarded = ['id'];

    public function pcd()
    {
        return $this->belongsTo('App\PCD', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'id');
    }
}
