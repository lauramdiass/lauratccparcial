<?php

namespace App\Providers;

use Illuminate\Contracts\Auth\Access\Gate as GateContract;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use DB;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any application authentication / authorization services.
     *
     * @param  \Illuminate\Contracts\Auth\Access\Gate  $gate
     * @return void
     */
    public function boot(GateContract $gate)
    {
        $this->registerPolicies($gate);

       /*   $cpf_administrador = DB::table('users')
            ->join('usuario_papel', 'users.id', '=', 'usuario_papel.id_usuario')
            ->join('papel', 'usuario_papel.id_papel', '=', 'papel.id')
            ->where('papel.descricao', '==', "administrador")
            ->select('users.cpf')
            ->get();

        $gate -> define($cpf_administrador, function($user) {


           return  $user -> cpf === $cpf_administrador;
           return true;
        });*/

        //
    }
}
