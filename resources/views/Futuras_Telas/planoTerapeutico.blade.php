@include('layouts.app')


<html>

<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Plano Terapêutico</h3>

                    </div>
                  </div>
                </div>

                <form>


                    <!-- DADOS DA CRIANÇA -->
                    <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-20">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Informações</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">

                          <div class="col-md-12">

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Tipo de Atendimento:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Início do atendimento:</label>
                              <div class="col-sm-3"><input type="text" class="form-control border-bottom"></div>
                            </div>


                          <div class="form-group"><label class="col-sm-3 control-label text-right">Atividade:</label>
                              <div class="col-sm-9">
                                <div class="col-sm-9 padding-0">
                                  <input type="checkbox" name="option"> Estimulação Precoce
                                </div>
                                <div class="col-sm-9 padding-0">
                                  <input type="checkbox" name="option"> Tratamento de Reabilitação
                                </div>
                                <div class="col-sm-9 padding-0">
                                  <input type="checkbox" name="option"> Grupos
                                  </div>
                              </div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Hipótese Diagnosticada:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=3 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                              </div>

                            Programação Terapêutica:<div class="form-group"><label class="col-sm-3 control-label text-right">a)</label>
                              <div class="col-sm-8"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">b)</label>
                              <div class="col-sm-8"><input type="text" class="form-control border-bottom"></div>
                            </div>

<div class="form-group"><label class="col-sm-3 control-label text-right">c)</label>
                              <div class="col-sm-8"><input type="text" class="form-control border-bottom"></div>
                            </div>

                             <br> Tempo previsto para a intervenção:<div class="form-group"><label class="col-sm-3 control-label text-right">a)</label>
                              <div class="col-sm-8"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">b)</label>
                              <div class="col-sm-8"><input type="text" class="form-control border-bottom"></div>
                            </div>

<div class="form-group"><label class="col-sm-3 control-label text-right">c)</label>
                              <div class="col-sm-8"><input type="text" class="form-control border-bottom"></div>
                            </div>



                             <div class="form-group"><label class="col-sm-3 control-label text-right">Data da entrevista:</label>
                              <div class="col-sm-3"><input type="text" class="form-control border-bottom"></div>
                            </div>


                              <div class="col-md-12">
                            <div class="form-group"><label class="col-sm-3 control-label text-right">Técnico responsável pelas informações:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
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
