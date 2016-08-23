@extends('layouts.app') @section('content')
<div id="content">

    <body id="mimin" class="dashboard">
        <div class="col-md-10">
            <div class="col-md-12 panel">
                <div class="col-md-12 panel-heading">
                    <h1>Atribuir Papel</h1> </div>
                <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                    <div class="col-md-12">
                        
                       <?php
                        $id = 0;
                        foreach ($users as $user):
                            while ($id == 0) {
                                $id = $user -> id;
                            }
                         endforeach
                        ?>
                        
                        {{ Form::open(array('action' => array('UserController@atribuiPapel', $id))) }}
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            <div class="form-group">
                                <select name="descricao">
                                    <option disabled selected value>-- Profissão -- </option>
                                    <option value="Recepcionista">Recepcionista</option>
                                    <option value="Pedagogo">Pedagogo</option>
                                    <option value="Psicólogo">Psicólogo</option>
                                    <option value="Fonoaudiólogo">Fonoaudiólogo</option>
                                    <option value="Fisioterapeuta">Fisioterapeuta</option>
                                </select>
                            </div>
                            <div class="right">
                                <input class="submit btn btn-danger" type="submit" value="Enviar"> </div>
                    {{ Form::close() }} 
                    </div>                     
                </div>
            </div>
        </div>
    </body>
</div> @endsection