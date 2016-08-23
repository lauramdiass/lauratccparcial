@include('layouts.app')


<html>

			<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Avaliação Fonoaudiológica</h3>

                    </div>
                  </div>
                </div>
                <form>



                  <!-- DADOS DA CRIANÇA -->
                    <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Dados da Criança</h4>
                        </div>
                         <div class="panel-body" style="padding-bottom:30px;">

                          <div class="col-md-12">
                             <div class="form-group"><label class="col-sm-3 control-label text-right">Encaminhado por:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                               <div class="form-group"><label class="col-sm-3 control-label text-right">Queixa principal:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                               <div class="form-group"><label class="col-sm-3 control-label text-right">Avaliação:</label>
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
