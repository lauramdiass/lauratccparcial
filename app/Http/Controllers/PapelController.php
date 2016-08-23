<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Endereco;
use App\PCD;
use App\Http\Requests\PCDRequest;

class PCDController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function adiciona(Request $request) {
        // Validate the request...

        $descricao = $request->input('descricao');

        $papel = new Papel;
        $papel->descricao = $descricao;

        /*
$papel = Shop::find($shop_id);
$shop->products()->attach($product_id);
   */


        $endereco->pcds()->save($pcd);


    }

}
