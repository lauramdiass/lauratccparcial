<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Endereco;
use App\Contato;
use App\Tratamento;
use App\PCD;
use App\Adicional;
use App\User;
use App\Familiar;
use App\Http\Requests\PCDRequest;

class PCDController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function novo() {
        return view('PCD/cadastro');
    }

    public function adiciona(PCDRequest $request) {
   
        //ENDEREÇO
        $rua = $request->input('rua');
        $numero = $request->input('numero');
        $bairro = $request->input('bairro');
        $cidade = $request->input('cidade');
        $estado = $request->input('estado');
        $tipo_moradia = $request->input('tipo_moradia');
        $material_moradia = $request->input('material_moradia');

        $endereco = new Endereco;
        $endereco->rua = $rua;
        $endereco->numero = $numero;
        $endereco->bairro = $bairro;
        $endereco->cidade = $cidade;
        $endereco->estado = $estado;
        $endereco->tipo_moradia = $tipo_moradia;
        $endereco->material_moradia = $material_moradia;
        $endereco->save();

        //PCD
        $lista_espera = $request->input('lista_espera');
        $nome = $request->input('nome');
        $data_nascimento = $request->input('data_nascimento');
        $sexo = $request->input('sexo');
        $rg = $request->input('rg');
        $cpf = $request->input('cpf');
        $nis = $request->input('nis');

        $pcd = new PCD;
        $pcd->nome = $nome;
        $pcd->data_nascimento =  date('Y-m-d', strtotime(str_replace('-', '/', $data_nascimento)));
        $pcd->sexo = $sexo;
        $pcd->rg = $rg;
        $pcd->cpf = $cpf;
        $pcd->nis = $nis;
        $pcd->ativo = 1;
        $pcd->lista_espera = $lista_espera;

        $endereco->pcds()->save($pcd);
        $pcd->save();
        //CONTATO
        $numero = $request->input('numero');
        $numero2 = $request->input('numero2');
        $email = $request->input('email');

        $contato = new Contato;
        $contato->numero = $numero;
        $contato->numero2 = $numero2;
        $contato->email = $email;        
        $pcd->contato()->save($contato);

        //INDICAÇÃO TERAPEUTICA
        $tipos = $request -> input('tipo');

        foreach($tipos as $tipo) {
            $tratamento = new Tratamento;
            $tratamento -> tipo = $tipo;
            $tratamento -> avaliado = false;
            $pcd->tratamentos()->save($tratamento);
        }

        //COMPOSIÇÃO FAMILIAR
        $nomeFamiliar = $request -> input('nomeFamiliar');
        $parentescoFamiliar = $request -> input('parentescoFamiliar');
        $sexoFamiliar = $request -> input('sexoFamiliar');
        $estadoCivilFamiliar = $request -> input('estadoCivilFamiliar');
        $dnFamiliar = $request -> input('dnFamiliar');
        $rgFamiliar = $request -> input('rgFamiliar');
        $cpfFamiliar = $request -> input('cpfFamiliar');
        $profissaoFamiliar = $request -> input('profissaoFamiliar');
        $rendaFamiliar = $request -> input('rendaFamiliar');
        $classificacaoFamiliar = $request -> input('classificacaoFamiliar');
        $maeFamiliar = $request -> input('maeFamiliar');
        $paiFamiliar = $request -> input('paiFamiliar');
        $dataNascimentoFamiliar = $request -> input('dataNascimentoFamiliar');
        $cont = 0;
        $cont = count($nomeFamiliar);

        while($cont > 0) {
            $familiar = new Familiar;
            $familiar -> nome = $nomeFamiliar[$cont-1];
            $familiar -> parentesco = $parentescoFamiliar[$cont-1];
            $familiar -> sexo = $sexoFamiliar[$cont-1];
            $familiar -> rg = $rgFamiliar[$cont-1];
            $familiar -> estado_civil = $estadoCivilFamiliar[$cont-1];
            $familiar -> profissao = $profissaoFamiliar[$cont-1];
            $familiar -> renda = $rendaFamiliar[$cont-1];
            $familiar -> dependente = $classificacaoFamiliar[$cont-1];
            $familiar -> nis = $dnFamiliar[$cont-1];  
            $familiar -> cpf = $cpfFamiliar[$cont-1];
            $familiar -> mae = $maeFamiliar[$cont-1];
            $familiar -> pai = $paiFamiliar[$cont-1];
            $dataNascimentoFamiliar[$cont-1] = date('Y-m-d', strtotime(str_replace('-', '/', $dataNascimentoFamiliar[$cont-1])));
            $familiar-> data_nascimento = $dataNascimentoFamiliar[$cont-1];
            $familiar -> save();

            $id_pcd = PCD::find($pcd->id);
            $id_familiar = Familiar::find($familiar->id);

            DB::table('pcd_familiar')->insert(
                ['id_pcd' => $id_pcd->id, 'id_familiar' => $id_familiar->id]);

            $cont--;
        }
             
            
        


        //ADICIONAIS

        $descricaoAdicional = $request -> input('descricaoAdicional');
        $motivoAdicional = $request -> input('motivoAdicional');
        $nomeAdicional = $request -> input('nomeAdicional');

        $cont = 0;
        $cont = count($descricaoAdicional);

        while($cont > 0) {
            if($nomeAdicional[$cont-1] != 'Não'){
            $adicional = new Adicional;
            $adicional -> nome = $nomeAdicional[$cont-1];
            $adicional -> descricao = $descricaoAdicional[$cont-1];
            $adicional -> motivo = $motivoAdicional[$cont-1];

            $pcd->adicionais()->save($adicional);
            
        }
            $cont--;
        }

       return view('/PCD/sucesso');
        
    }


    

   public function lista(){
       $pcds = PCD::all();
       return view('PCD/lista') ->with('pcds', $pcds);
    }
    
      public function desvincula($id){
        $pcd = PCD::find($id);
        $pcd->ativo = 0;
        $pcd->save();
        return view('PCD/motivoSaida') ->with('id', $id);
    }
    
    
     public function motivoSaida(PCDRequest $request, $id){
        $motivoSaida = $request->input('motivo_saida');
        $pcd = PCD::find($id);
        $pcd->motivo_saida = $motivoSaida;
        $pcd->save();
        return view('PCD/sucesso');
    }
    
    
      public function ativa($id){
        $pcd = PCD::find($id);
        $pcd->ativo = 1;
        $pcd->save();
        return redirect()->action('PCDController@lista');
    }
    
       public function ingressa($id){
        $pcd = PCD::find($id);
        $pcd->lista_espera = 0;
        $pcd->save();
        return redirect()->action('PCDController@lista');
    }
    
      public function edita($id)
    {
        $pcd = PCD::find($id);
        if(is_null($pcd)){
            return Redirect::route('/PCD/lista');
        }


        $endereco = DB::table('endereco')->where('id', '=', $pcd->id_endereco)->first();
          
         $contato = DB::table('contato')->where('id_pcd', '=', $pcd->id)->first();
          
        $tratamentos = DB::table('tratamento')->where('id_pcd', '=', $pcd->id)->get();
          
        $adicionais = DB::table('adicional')->where('id_pcd', '=', $pcd->id)->get();
          
       return \View::make('/PCD/edita', ['pcd' => $pcd, 'endereco' => $endereco, 'contato' => $contato, 'tratamentos' => $tratamentos,  'adicionais' => $adicionais]);

    }
    
    public function edita2(Request $input, $id)
    {
        echo("eheheheh");
    }
    
    
    
/*
    public function mostra($id){
        $pcd = PCD::find($id);
             if(empty($pcd)) {
                 return "Esse paciente não existe";
            }
        return view('PCD/detalhes')
        ->with('pcd', $pcd);
    }

    public function listaJson(){
        $pcds = PCD::all();
        return response()->json($pcds);
    }

  */

}