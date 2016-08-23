@extends('layouts.app') @section('content')
<div id="content">

    <body id="mimin" class="dashboard">
        <div class="col-md-10">
            <div class="col-md-12 panel">
                <div class="col-md-12 panel-heading">
                    <h1>Motivo da Saída</h1> </div>
                <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                    <div class="col-md-12">
                                              
                        {{ Form::open(array('action' => array('PCDController@motivoSaida', $id))) }}
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                        
                            <div class="form-group">
                             <label class="col-sm-3 control-label text-right">Motivo:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="motivo_saida" ROWS=3 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                           
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