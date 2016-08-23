@extends('layouts.app') @section('content')
<div id="wrap-content">
    <div id="content">
        <div class="col-md-10">
            <div class="col-md-12 panel">
                <div class="col-md-12 panel-heading">
                    <h4>Solicitações</h4> </div>
                <div class="col-md-12 panel-body">
                    <div class="col-md-12"> @if($naoAutorizados != null)
                        <table>
                            <tr>
                                <td><b> Nome</b> </td>
                                <td> <b> CPF </b> </td>
                                <td> <b> Email </b> </td>
                                <td> <b> Ação </b> </td>
                            </tr>
                            <?php foreach ($naoAutorizados as $user): ?>
                                <tr>
                                    <td> {{ $user->name }} </td>
                                    <td> {{ $user->cpf }} </td>
                                    <td> {{ $user->email }} </td>
                                    <td>
                                        <a href="{{action('UserController@aceita', $user->id)}}"> <span class="glyphicon glyphicon-ok" style="font-size:24px;color:green"></span> </a>
                                        <a href="{{action('UserController@rejeita', $user->id)}}"> <span class="glyphicon glyphicon-remove" style="font-size:24px;color:red"></span> </a>
                                    </td>
                                </tr>
                                <?php endforeach ?>
                        </table> @else
                        <h3>Nenhuma solicitação no momento.</h3> @endif </div>
                </div>
            </div>
        </div> @endsection