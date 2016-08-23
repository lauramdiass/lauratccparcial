@extends('layouts.app') @section('content')
<div id="wrap-content">
    <div id="content">
        <div class="col-md-8 col-md-offset-1 centerLogin">
            <div class="col-md-10 col-md-offset-1 panel ">
                <div class="col-md-12 panel-heading">
                    <h4>ENTRAR</h4> </div>
                <div class="col-md-12 panel-body">
                    <div class="col-md-12">
                        <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}"> {!! csrf_field() !!}
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
                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-4">
                                    <button type="submit" class="btn btn-primary right" style="margin-left: 5px; position:relative; top: 2px;"> <i class="fa fa-btn fa-sign-in" href="{{ url('/home') }}"></i> Login </button> <a class="right btn btn-link" href="{{ url('/password/reset') }}">Esqueceu sua Senha?</a> </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> @endsection