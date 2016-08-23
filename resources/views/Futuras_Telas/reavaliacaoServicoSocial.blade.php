@include('layouts.app')


<html>

<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Avaliação do Serviço Social</h3>

                    </div>
                  </div>
                </div>

                <form>

               <!--DADOS DA ENTREVISTA-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Dados da Entrevista</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">

                          <div class="form-group"><label class="col-sm-3 control-label text-right">Data:</label>
                              <div class="col-sm-3"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Entrevistado:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>



                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                    <!-- DADOS DA CRIANÇA -->
                    <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Dados de Identificação da Criança</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">

                          <div class="col-md-12">

                          	<div class="form-group"><label class="col-sm-3 control-label text-right">Nome:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Nascimento:</label>
                              <div class="col-sm-3"><input type="text" class="form-control border-bottom"></div>
                            </div>

                           <div class="form-group"><label class="col-sm-3 control-label text-right">Idade:</label>
                              <div class="col-sm-2"><input type="text" class="form-control border-bottom"></div>
                            </div>


                              <div class="form-group"><label class="col-sm-3 control-label text-right">CID/deficiência:</label>
                              <div class="col-sm-8"><input type="text" class="form-control border-bottom"></div>
                            </div>


                              <div class="form-group"><label class="col-sm-3 control-label text-right">Medicação:</label>
                              <div class="col-sm-2"><input type="text" class="form-control border-bottom"></div>
                            </div>

                              <div class="form-group"><label class="col-sm-3 control-label text-right">Alergias:</label>
                              <div class="col-sm-2"><input type="text" class="form-control border-bottom"></div>
                            </div>




                           <div class="form-group"><label class="col-sm-3 control-label text-right">Sexo:</label>
                              <div class="col-sm-9">
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Feminino
                                </div>
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Masculino
                                </div>
                              </div>
                            </div>



                            <div class="form-group"><label class="col-sm-3 control-label text-right">NIS:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>


                              <div class="form-group"><label class="col-sm-3 control-label text-right">BPC?</label>
                              <div class="col-sm-9">
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Sim
                                </div>
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Não
                                </div>

                              </div>
                            </div>


                               <div class="form-group"><label class="col-sm-3 control-label text-right">Frequenta a escola?</label>
                              <div class="col-sm-9">
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Sim
                                </div>
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Não
                                </div>

                              </div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">(se nao)Por quê?</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">(se sim)Nome da escola:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Total da renda familiar:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Total de dependentes dessa renda::</label>
                              <div class="col-sm-3"><input type="text" class="form-control border-bottom"></div>
                            </div>

                              <div class="form-group"><label class="col-sm-3 control-label text-right">Atendimentos recebidos:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                            </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>




  <!--DADOS DO RESPONSÁVEl-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Dados do Responsável</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">


                                <div class="form-group"><label class="col-sm-3 control-label text-right">Nome mãe:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Nome pai:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Responsável:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>




                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


 			<!--ENDEREÇO-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Endereço</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">

                         	 <div class="form-group"><label class="col-sm-3 control-label text-right">Rua:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Nº:</label>
                              <div class="col-sm-2"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Bairro:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>


                            <div class="form-group"><label class="col-sm-3 control-label text-right">CEP:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>


                            <div class="form-group"><label class="col-sm-3 control-label text-right">Cidade:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Estado:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Telefone:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Telefone 2:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>





 							</div>
                            </div>
                          </div>
                        </div>
                      </div>





                    <!--RELATO DA ENTREVISTA-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Relato da Entrevista</h4>
                        </div>

                        <div class="panel-body" style="padding-bottom:30px;">

                          <div class="form-group"><label class="col-sm-3 control-label text-right">Descrição:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>


                              <div class="right">
                              <br>
                              <input class="submit btn btn-danger" type="submit" value="Enviar">
                        </div>
                         </form>

                        </div>
                            </div>
                          </div>
                        </div>
                      </div>

</div>

</html>
