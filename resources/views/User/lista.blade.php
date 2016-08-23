@extends('layouts.app') @section('content')
<div id="wrap-content">
    <div id="content">
        <div class="col-md-10">
            <div class="col-md-12 panel">
                <div class="col-md-12 panel-heading">
                    <h4>Usuários</h4> </div>
                <div class="col-md-12 panel-body">
                    <div class="col-md-12">@if($users != null)
                        <table>
                            <tr>
                                <td><b> Nome</b> </td>
                                <td> <b> CPF </b> </td>
                                <td> <b> Email </b> </td>
                                <td> <b> Ação </b> </td>
                            </tr> @foreach ($users as $user)
                            <tr>
                                <td> {{ $user->name }} </td>
                                <td> {{ $user->cpf }} </td>
                                <td> {{ $user->email }} </td>
                                <td>
                                    <a href="{{action('UserController@exclui', $user->id)}}"> <span class="glyphicon glyphicon-trash"></span> </a>
                                    <a href="{{action('UserController@edita', $user->id)}}"> <span class="fa fa-pencil"></span> </a>
                                </td>
                            </tr> @endforeach </table>@else
                        <h3>Nenhum usuário cadastrado.</h3> @endif </div>
                </div>
            </div>
        </div>
    </div> @endsection