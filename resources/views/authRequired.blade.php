@extends('layouts.app') @section('content')
<div id="content">
    <div class="container">
        <div class="row">
            <div class="span12">
                <div class="jumbotron center">
                    <p>Aguarde a confirmação do administrador para que seja possível fazer login.</p> <a href="{{ url('/login') }}" class="btn btn-large btn-info"><i class="icon-home icon-white"> </i>Login</a> </div>
                <br /> </div>
        </div>
    </div>
</div> @endsection
