<?php

namespace App;
use App\PCD;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasOne;

class Contato extends Model
{
    protected $table = 'contato';
    public $timestamps = false;
    protected $fillable = array('numero', 'numero2', 'email');
    protected $guarded = ['id'];

    public function pcd()
    {
        return $this->belongsTo('App\PCD', 'id');
    }
}
