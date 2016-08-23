@extends('layouts.app') @section('content')
<div id="wrap-content">
    <div id="content">
        <div class="col-md-10 centerRegister">
            <div class="col-md-12 panel">
                <div class="col-md-12 panel-heading">
                    <h4>REGISTRAR-SE</h4> </div>
                <div class="col-md-12 panel-body">
                    <div class="col-md-12">
                        <form class="form-horizontal" role="form" method="POST" action="/register"> {!! csrf_field() !!}
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} form-animate-text" style="margin-top:40px !important;">
                                <input type="name" class="form-text" name="name" value="{{ old('name') }}"> @if ($errors->has('name')) <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span> @endif <span class="bar"></span>
                                <label>Nome: *</label>
                            </div>
                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} form-animate-text" style="margin-top:40px !important;">
                                <input type="email" class="form-text" name="email" value="{{ old('email') }}" required> @if ($errors->has('email')) <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span> @endif <span class="bar"></span>
                                <label>E-mail: *</label>
                            </div>
                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} form-animate-text" style="margin-top:40px !important;">
                                <input type="password" class="form-text" name="password" required> @if ($errors->has('password')) <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span> @endif<span class="bar"></span>
                                <label>Senha: *</label>
                            </div>
                            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }} form-animate-text" style="margin-top:40px !important;">
                                <input type="password" class="form-text" name="password_confirmation" required> @if ($errors->has('password_confirmation')) <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span> @endif<span class="bar"></span>
                                <label>Confirme a Senha: *</label>
                            </div>
                            <!-- CPF -->
                            <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                <input type="text" class="form-text mask-cpf" id="validate_cpf" name="cpf" required><span class="bar"></span>
                                <label>CPF: *</label>
                            </div>
                           <div class="form-group">
                                <div class="col-md-6 col-md-offset-5">
                                    <button type="submit" class="btn btn-primary"> <i class="fa fa-btn fa-user"></i> Registrar-se </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div> @endsection