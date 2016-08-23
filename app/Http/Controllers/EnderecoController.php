<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use Illuminate\Http\Request;

class EnderecoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



}
