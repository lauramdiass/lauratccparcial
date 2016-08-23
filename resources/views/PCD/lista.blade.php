@extends('layouts.app') @section('content')
<div id="wrap-content">
    <div id="content">
        <div class="col-md-10">
            <div class="col-md-12 panel">
                <div class="col-md-12 panel-heading">
                    <h4>Pacientes</h4> </div>
                <div class="col-md-12 panel-body">
                    <div class="col-md-12">@if($pcds != null)
                        <table>
                            <tr>
                                <td><b> Status</b> </td>
                                <td><b> Nome</b> </td>
                                <td> <b> CPF </b> </td>
                               
                                <td> <b> Ação </b> </td>
                            </tr>
                            @foreach ($pcds as $pcd)
                                <tr>
                                    
                                    @if($pcd -> lista_espera)                                    
                                    <td> Aguardando Vaga </td>
                                    
                                    @else
                                    @if($pcd -> ativo)
                                    <td> Ativo </td>
                                    @else
                                    <td> Desvinculado </td>
                                    @endif
                                    
                                    @endif
                                    
                                    <td> {{ $pcd->nome }} </td>
                                    <td> {{ $pcd->cpf }} </td>
                                   
                                    <td>
                                       @if($pcd -> lista_espera) <a href="{{action('PCDController@ingressa', $pcd->id)}}"> <span class=" glyphicon glyphicon-hourglass"></span> </a>  
                                        @else
                                        @if(!$pcd -> ativo)
                                        <a href="{{action('PCDController@ativa', $pcd->id)}}"> <span class="glyphicon glyphicon-ok"></span> </a>
                                        @endif
                                         @if($pcd -> ativo)
                                        <a href="{{action('PCDController@desvincula', $pcd->id)}}"> <span class="glyphicon glyphicon-remove"></span> </a>
                                        @endif
                                        
                                    @endif
                                        <a href="{{action('PCDController@edita', $pcd->id)}}"> <span class="fa fa-pencil"></span> </a>
                                    </td>
                                </tr>
                                @endforeach
                        </table>@else
                        <h3>Nenhuma PCD cadastrado.</h3> @endif </div>
                </div>
            </div>
        </div>
    </div> @endsection