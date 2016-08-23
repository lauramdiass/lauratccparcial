@extends('layouts.app') @section('content')
<div id="content">
    
    <body id="mimin" class="dashboard">
        <div class="col-md-10">
            <div class="col-md-12 panel">
                <div class="col-md-12 panel-heading">
                    <h1>Editar Paciente</h1> </div>
                <div class="col-md-12 panel-body" style="padding-bottom:30px;">
                    <div class="col-md-12">
                        <form action="{{action('PCDController@adiciona')}}" method="post">
                            <input type="hidden" name="_token" value="{{{ csrf_token() }}}" />
                            <div class="col-md-12">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <label style="font-size:18px; color:#999999;    margin-right:30px; position:relative; top:1px;">Na lista de espera? </label>
                                    <select name="lista_espera" style="margin-left:0px;">
                                        <option selected value>
                                            <?php echo'-- '.($pcd ->lista_espera).' --'; ?>
                                        </option>
                                        <option value="0">Sim</option>
                                        <option value="1">Não</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>DADOS DE IDENTIFICAÇÃO DA CRIANÇA</h3> </div>
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="validate_firstname" name="nome" value="<?php echo($pcd->nome); ?>"> <span class="bar"></span>
                                    <label>Nome: </label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="date" class="form-text dateinput" id="validate_borndate" name="data_nascimento" value="<?php echo($pcd->data_nascimento); ?>"> <span class="bar"></span>
                                    <label>Data de Nascimento: </label>
                                </div>
                                <div class="form-group" style="margin-top:40px !important;">
                                    <label style="font-size:18px; color:#999999; margin-right:5px; padding-left:5px">Sexo: </label>
                                    <select name="sexo">
                                        <option selected value>
                                            <?php echo'-- '.($pcd ->sexo).' --'; ?>
                                        </option>
                                        <option value="masculino">Masculino</option>
                                        <option value="feminino">Feminino</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="number" class="form-text" id="validate_firstname" name="rg" value="<?php echo($pcd->rg); ?>"> <span class="bar"></span>
                                    <label>RG: </label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text mask-cpf" id="validate_cpf" name="cpf" value="<?php echo($pcd->cpf); ?>"> <span class="bar"></span>
                                    <label>CPF: </label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="number" class="form-text nisinput" id="validate_firstname" name="nis" value="<?php echo($pcd->nis); ?>"> <span class="bar"></span>
                                    <label>NIS:</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>ENDEREÇO</h3> </div>
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="rua" value="<?php echo($endereco->rua); ?>"> <span class="bar"></span>
                                    <label>Rua: </label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="bairro" value="<?php echo($endereco->bairro); ?>"> <span class="bar"></span>
                                    <label>Bairro: </label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="cidade" value="<?php echo($endereco->cidade); ?>"> <span class="bar"></span>
                                    <label>Cidade: </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="numero" value="<?php echo($endereco->numero); ?>"> <span class="bar"></span>
                                    <label>Nº: </label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="estado" value="<?php echo($endereco->estado); ?>"> <span class="bar"></span>
                                    <label>Estado: </label>
                                </div>
                            </div>
                            <div class="col-md-12"></div>
                            <div class="col-md-6" style="position: relative; bottom: 40px;">
                                <div class="form-group" style="margin-top:40px !important;">
                                    <label style="font-size:18px; color:#999999; margin-right:5px; padding-left:5px">Moradia:</label>
                                    <select name="tipo_moradia" required>
                                        <option selected value>
                                            <?php echo'-- '.($endereco ->tipo_moradia).' --'; ?>
                                        </option>
                                        <option value="propria">Própria</option>
                                        <option value="alugada">Alugada</option>
                                        <option value="cedida">Cedida</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6" style="position: relative; bottom: 40px;">
                                <div class="form-group" style="margin-top:40px !important;">
                                    <label style="font-size:18px; color:#999999; margin-right:5px; padding-left:5px">Material:</label>
                                    <select name="material_moradia" required>
                                        <option selected value>
                                            <?php echo'-- '.($endereco ->material_moradia).' --'; ?>
                                        </option>
                                        <option value="madeira">Madeira</option>
                                        <option value="alvenaria">Alvenaria</option>
                                        <option value="mista">Mista</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>CONTATO</h3> </div>
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="number" class="form-text" id="validate_firstname" name="numero" value="<?php echo($contato->numero); ?>"> <span class="bar"></span>
                                    <label>Telefone: </label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" id="validate_email" name="email" value="<?php echo($contato->email); ?>"> <span class="bar"></span>
                                    <label>Email:</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <input type="number" class="form-text" id="validate_firstname" name="numero2" value="<?php echo($contato->numero2); ?>"> <span class="bar"></span>
                                    <label>Telefone Reserva: </label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>INFORMAÇÕES</h3> </div>
                            <div class="col-md-6">
                                @foreach($adicionais as $adicional)
                                <div class="form-group form-animate-text display" style="margin-top:40px !important;">
                                    <label style="font-size:18px; color:#999999;    margin-right:30px; position:relative; top:1px;">Atendimentos?</label>
                                    <select class="outrosAtendimentos" name="nomeAdicional[]" required style="margin-left:0px;">
                                        <option value>Selecione </option>
                                        <option value="Atendimentos">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>
                                @endforeach
                                <div class="form-group form-animate-text nodisplay atendimento" style="margin-top:40px !important;">
                                    <input type="text" class="form-text " name="motivoAdicional[]"> <span class="bar"></span>
                                    <label>Por quê?</label>
                                </div>
                                <div class="form-group form-animate-text nodisplay atendimento" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="descricaoAdicional[]"> <span class="bar"></span>
                                    <label>Qual e onde?</label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <label style="font-size:18px; color:#999999;    margin-right:30px; position:relative; top:1px;">Escola?</label>
                                    <select name="nomeAdicional[]" class="frequentaEscola" required style="margin-left:0px;">
                                        <option value>Selecione </option>
                                        <option value="Escola">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>
                                <div class="form-group form-animate-text nodisplay escola" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="motivoAdicional[]"> <span class="bar"></span>
                                    <label>Por quê?</label>
                                </div>
                                <div class="form-group form-animate-text nodisplay escola" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="descricaoAdicional[]"> <span class="bar"></span>
                                    <label>Qual?</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <label style="font-size:18px; color:#999999;    margin-right:30px; position:relative; top:1px;">Acompanhamento médico?</label>
                                    <select name="nomeAdicional[]" class="acompanhamentoMedico" required style="margin-left:0px;">
                                        <option value>Selecione </option>
                                        <option value="Acompanhamento médico">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>
                                <div class="form-group form-animate-text nodisplay medico" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="motivoAdicional[]"> <span class="bar"></span>
                                    <label>Por quê?</label>
                                </div>
                                <div class="form-group form-animate-text nodisplay medico" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="descricaoAdicional[]"> <span class="bar"></span>
                                    <label>Qual?</label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <label style="font-size:18px; color:#999999;    margin-right:30px; position:relative; top:1px;">Uso de medicação?</label>
                                    <select name="nomeAdicional[]" class="usoMedicacao" required style="margin-left:0px;">
                                        <option value>Selecione </option>
                                        <option value="Uso de medicação">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>
                                <div class="form-group form-animate-text nodisplay medicacao" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="motivoAdicional[]"> <span class="bar"></span>
                                    <label>Por quê?</label>
                                </div>
                                <div class="form-group form-animate-text nodisplay medicacao" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="descricaoAdicional[]"> <span class="bar"></span>
                                    <label>Qual?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3>BENEFÍCIOS</h3> </div>
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <label style="font-size:18px; color:#999999;    margin-right:30px; position:relative; top:1px;">Passe livre?</label>
                                    <select name="nomeAdicional[]" class="passeLivre" required style="margin-left:0px;">
                                        <option value>Selecione </option>
                                        <option value="Passe livre">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>
                                <div class="form-group form-animate-text nodisplay passe" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="motivoAdicional[]"> <span class="bar"></span>
                                    <label>Por quê?</label>
                                </div>
                                <div class="form-group form-animate-text nodisplay passe" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="descricaoAdicional[]"> <span class="bar"></span>
                                    <label>Qual?</label>
                                </div>
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <label style="font-size:18px; color:#999999;    margin-right:30px; position:relative; top:1px;">BPC? </label>
                                    <select name="nomeAdicional[]" class="bpc" required style="margin-left:0px;">
                                        <option value>Selecione </option>
                                        <option value="BPC">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>
                                <div class="form-group form-animate-text nodisplay tembpc" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="motivoAdicional[]"> <span class="bar"></span>
                                    <label>Por quê?</label>
                                </div>
                                <div class="form-group form-animate-text nodisplay tembpc" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="descricaoAdicional[]"> <span class="bar"></span>
                                    <label>Qual?</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-animate-text" style="margin-top:40px !important;">
                                    <label style="font-size:18px; color:#999999;    margin-right:30px; position:relative; top:1px;">Bolsa família?</label>
                                    <select name="nomeAdicional[]" class="bolsaFamilia" required style="margin-left:0px;">
                                       
                                        <?php echo ($adicional -> nome == "Bolsa família" ? '<option selected value="Bolsa família">-- Sim --</option>' : '<option selected value="Não">-- Não --</option>') ?>
                                        
                                        <option value="Bolsa família">Sim</option>
                                        <option value="Não">Não</option>
                                    </select>
                                </div>
                                <div class="form-group form-animate-text nodisplay bolsa" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="motivoAdicional[]"> <span class="bar"></span>
                                    <label>Por quê?</label>
                                </div>
                                <div class="form-group form-animate-text nodisplay bolsa" style="margin-top:40px !important;">
                                    <input type="text" class="form-text" name="descricaoAdicional[]"> <span class="bar"></span>
                                    <label>Qual?</label>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h3 class="left">COMPOSIÇÃO FAMILIAR</h3>
                                <button class="fa fa-plus add-member-button" aria-hidden="true" type="button"></button>
                            </div>
                            <div class="input_fields_wrap"> </div>
                            <div class="col-md-12">
                                <h3>INDICAÇÃO TERAPÊUTICA</h3> </div>
                            <div class="col-md-6">
                                
                                <?php
                                $temPsicologo = false;
                                $temFisioterapeuta = false;
                                $temFonoaudiologo = false;
                                $temPedagogo = false;
                                ?>
                               
                                @foreach ($tratamentos as $tratamento)
                                
                                @if ("Psicólogo" == $tratamento -> tipo) 
                                <?php $temPsicologo = true; ?>
                                @endif
                                @if ("Fisioterapeuta" == $tratamento -> tipo)
                                <?php $temFisioterapeuta = true; ?>
                                @endif
                                @if ("Fonoaudiólogo" == $tratamento -> tipo)
                                <?php $temFonoaudiologo = true; ?>
                                @endif
                                @if ("Pedagogo" == $tratamento -> tipo)
                                <?php $temPedagogo = true; ?>
                                @endif
                                
                                
                                 @endforeach  
                                                                                     
                                     <div class="form-group form-animate-checkbox" style="margin-top:40px !important;">
                                      <?php echo ($temPsicologo ? '<input id="source" type="checkbox" name="tipo[]" class="checkbox" value="Psicólogo" checked>Psicólogo' : '<input id="source" type="checkbox" name="tipo[]" class="checkbox" value="Psicólogo">Psicólogo');?> </div>
                                
                                <div class="form-group form-animate-checkbox" style="margin-top:40px !important;">
                                      <?php echo ($temFisioterapeuta ?  '<input id="source" type="checkbox" name="tipo[]" class="checkbox" value="Fisioterapeuta" checked>Fisioterapeuta' : '<input id="source" type="checkbox" name="tipo[]" class="checkbox" value="Fisioterapeuta">Fisioterapeuta');?> </div>
                                                              
                            </div>
                            <div class="col-md-6">
                                <div class="form-group form-animate-checkbox" style="margin-top:40px !important;">
                                      <?php echo ($temFonoaudiologo ? '<input id="source" type="checkbox" name="tipo[]" class="checkbox" value="Fonoaudiólogo" checked>Fonoaudiólogo' : '<input id="source" type="checkbox" name="tipo[]" class="checkbox" value="Fonoaudiólogo">Fonoaudiólogo');?> </div>
                                    
                                
                                <div class="form-group form-animate-checkbox" style="margin-top:40px !important;">
                                      <?php echo ($temPedagogo ? '<input id="source" type="checkbox" name="tipo[]" class="checkbox" value="Pedagogo" checked>Pedagogo' : '<input id="source" type="checkbox" name="tipo[]" class="checkbox" value="Pedagogo">Pedagogo');?> </div>
                            <div class="right">
                                <input class="submit btn btn-danger" type="submit" value="Enviar"> </div>
                        </div>
                                </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</div> @endsection