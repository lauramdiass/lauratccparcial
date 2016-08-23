@extends('layouts.app') @section('content')
<div id="content">

    <body id="mimin" class="dashboard">
        <div class="col-md-10">
            <div class="col-md-12 panel">
                <div class="col-md-12 panel-heading">
                    <h1>Editar Usuário</h1> </div>
                <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                    <div class="col-md-12"> {{ Form::open(array('action' => array('UserController@edita2', $user))) }}
                        <input type="hidden" name="_token" value="{{{ csrf_token() }}}" /> {!! csrf_field() !!}
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} form-animate-text" style="margin-top:40px !important;">
                            <input type="name" class="form-text" name="name" value="<?php echo($user->name); ?>" required> @if ($errors->has('name')) <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif <span class="bar"></span>
                            <label>Nome: *</label>
                        </div>
                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-animate-text" style="margin-top:40px !important;">
                            <input type="email" class="form-text" name="email" value="<?php echo($user->email); ?>" required> @if ($errors->has('email')) <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif <span class="bar"></span>
                            <label>E-mail: *</label>
                        </div>
                        <!-- CPF -->
                        <div class="form-group form-animate-text" style="margin-top:40px !important;">
                            <input type="text" class="form-text mask-cpf" id="validate_cpf" name="cpf" value="<?php echo($user->cpf); ?>" required><span class="bar"></span>
                            <label>CPF: *</label>
                        </div> Papel:
                        <div class="form-group">
                            <select name="descricao">
                                <option selected value>
                                    <?php echo'-- '.($papel ->descricao).' --'; ?>
                                </option>
                                <option value="Recepcionista">Recepcionista</option>
                                <option value="Pedagogo">Pedagogo</option>
                                <option value="Psicólogo">Psicólogo</option>
                                <option value="Fonoaudiólogo">Fonoaudiólogo</option>
                                <option value="Fisioterapeuta">Fisioterapeuta</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-5">
                                <button type="submit" class="btn btn-primary"> <i class="fa fa-btn fa-user"></i> Salvar </button>
                            </div>
                        </div> {{ Form::close() }} </div>
                </div>
            </div>
        </div> @endsection