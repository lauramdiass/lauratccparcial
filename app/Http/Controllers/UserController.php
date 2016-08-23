<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use App\User;
use Route;
use Auth;
use App\Papel;


class UserController extends Controller
{
   
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function listaNaoAutorizados()
    {
        $naoAutorizados = DB::table('users')->where('activated', 0)->get();

        return view('/User/solicitacoes')->with('naoAutorizados', $naoAutorizados);
    }


    public function rejeita($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
        
        return redirect()->action('UserController@listaNaoAutorizados');
    }


    public function aceita($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update(['activated' => 1]);

        $users = DB::table('users')->where('id', $id)->get();

        return view('/User/atribuiPapel')->with('users', $users);
    }

    public function atribuiPapel(Request $request, $id)
    {
        $descricao = $request->input('descricao');


        $papel = DB::table('papel')->where('descricao', '=', $descricao)->first();


        DB::table('usuario_papel')->insert(
            ['id_usuario' => $id, 'id_papel' => $papel -> id]);


        return view('/User/sucessoSolicitacoes');
    }


    public function lista()
    {
        $users = DB::table('users')->where('activated', '=', 1)->get();

        return view('/User/lista')->with('users', $users);
    }


    public function exclui($id)
    {
        DB::table('users')->where('id', '=', $id)->delete();
      
        return redirect()->action('UserController@lista');
    }

    public function edita($id)
    {
        $user = User::find($id);
        if(is_null($user)){
            return Redirect::route('/User/lista');
        }

        $usuario_papel = DB::table('usuario_papel')->where('id_usuario', '=', $id)->first();

        $papel = DB::table('papel')->where('id', '=', $usuario_papel -> id_papel)->first();

        return \View::make('/User/edita', ['user' => $user, 'papel' => $papel]);
    }

    public function edita2(Request $input, $id)
    {
        $user = User::find($id);
        $user -> name = $input -> Input('name');
        $user -> email = $input -> Input('email');
        $user -> cpf = $input -> Input('cpf');
        $user -> save();

        $descricao = $input->Input('descricao');

        $papel = DB::table('papel')->where('descricao', '=', $descricao)->first();

        DB::table('usuario_papel')
            ->where('id_usuario', $id)
            ->update(['id_papel' => $papel -> id]);

        return view('/User/sucessoUsuarios');
    }


    public function verificaPermissao(){

        if (Auth::check()){
            $usuario_id = Auth::user()->id;
        }

        $permissao = DB::table('papel')
            ->select('usuario_papel.id_papel')
            ->join('usuario_papel','usuario_papel.id_papel', '=', 'papel.id')
            ->join('users','users.id', '=', 'usuario_papel.id_usuario')
            ->where('usuario_papel.id_usuario', '=', $usuario_id)
            ->get();

        $arrayPermissao = array();

        foreach ($permissao as $key => $value) {
            $arrayPermissao[$key] = $permissao[$key]->id_papel;
        }

        return $arrayPermissao;
    }


}
