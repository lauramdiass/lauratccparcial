@include('layouts.app')


<html>

			<!-- start: Content -->
            <div id="content">
                <div class="panel box-shadow-none content-header">
                  <div class="panel-body">
                    <div class="col-md-12">
                        <h3 class="animated fadeInLeft">Anamnese Psicológica Infantil</h3>

                    </div>
                  </div>
                </div>
                <form>







               <!--MOTIVO-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Motivo da Consulta</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">


                          <div class="form-group"><label class="col-sm-3 control-label text-right">Queixa:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=3 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>


                             <div class="form-group"><label class="col-sm-3 control-label text-right">Aparecimento do problema:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=3 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Tratamento anterior:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=3 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Quem encaminhou:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Exames Realizados:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=3 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>


                              <div class="form-group"><label class="col-sm-3 control-label text-right">Medicações?</label>
                              <div class="col-sm-9">
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Sim
                                </div>
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Não
                                </div>

                              </div>
                            </div>


                            <div class="form-group"><label class="col-sm-3 control-label text-right">Especifique:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>




                              </div>
                            </div>
                          </div>
                        </div>
                      </div>



                       <!--ANTECEDENTES PESSOAIS-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Antecedentes Pessoais</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">

                          <div class="form-group"><label class="col-sm-3 control-label text-right">Ordem de nascimento:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Concepção:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                            </div>
                            </div>
                          </div>
                        </div>
                      </div>


                             <!--GRAVIDEZ-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Gravidez</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Gravidez planejada?</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                           <div class="form-group"><label class="col-sm-3 control-label text-right">Enjoou?</label>
                              <div class="col-sm-9">
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Sim
                                </div>
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Não
                                </div>

                              </div>
                            </div>


                            <div class="form-group"><label class="col-sm-3 control-label text-right">Quanto tempo?</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Condições emocionais durante a gravidez?</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                            </div>
                            </div>
                          </div>
                        </div>
                      </div>


                      <!--NASCIMENTO-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Nascimento</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">


                              <div class="form-group"><label class="col-sm-3 control-label text-right">Parto:</label>
                              <div class="col-sm-9">
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Natural
                                </div>
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Cesariana
                                </div>

                              </div>
                            </div>

                                <div class="form-group"><label class="col-sm-3 control-label text-right">Duração:</label>
                              <div class="col-sm-9">
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> A termo
                                </div>
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Prematuro
                                </div>

                              </div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Peso:</label>
                              <div class="col-sm-3"><input type="text" class="form-control border-bottom"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Altura:</label>
                              <div class="col-sm-3"><input type="text" class="form-control border-bottom"></div>
                            </div>


                                <div class="form-group"><label class="col-sm-3 control-label text-right">Incubadora?</label>
                              <div class="col-sm-9">
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Sim
                                </div>
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Não
                                </div>

                              </div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Tempo:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>



                                <div class="form-group"><label class="col-sm-3 control-label text-right">Chorou ao nascer?</label>
                              <div class="col-sm-9">
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Sim
                                </div>
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Não
                                </div>

                              </div>
                            </div>


                           </div>
                            </div>
                          </div>
                        </div>
                      </div>





   <!--ALIMENTAÇÃO-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Alimentação</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">


                            <div class="form-group"><label class="col-sm-3 control-label text-right">Seio:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>


                            <div class="form-group"><label class="col-sm-3 control-label text-right">Mamadeira:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Atitude do desmame:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Alimentação atual:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>



   <!--DESENVOLVIMENTO PSICOMOTOR-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Desenvolvimento Psicomotor</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">


                            <div class="form-group"><label class="col-sm-3 control-label text-right">Sustentar a cabeça:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>


                            <div class="form-group"><label class="col-sm-3 control-label text-right">Sentar:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>


                             <div class="form-group"><label class="col-sm-3 control-label text-right">Engatinhar:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Ficar de pé com apoio:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Andar sem apoio:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Dominância manual:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                             <div class="form-group"><label class="col-sm-3 control-label text-right">Linguagem verbal:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>




   <!--CONTROLE DOS ESFÍNCTERES-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Controle dos Esfíncteres</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">


                          <div class="form-group"><label class="col-sm-3 control-label text-right">Idade de aquisição:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>


                            <div class="form-group"><label class="col-sm-3 control-label text-right">Dificuldades:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>


                            <div class="form-group"><label class="col-sm-3 control-label text-right">Enurese noturna?</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>


                              </div>
                            </div>
                          </div>
                        </div>
                      </div>


                       <!--SONO-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Sono</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">

                           <div class="form-group"><label class="col-sm-3 control-label text-right"></label>
                              <div class="col-sm-9">
                                <div class="col-sm-3 padding-0">
                                  <input type="radio" name="option"> Calmo
                                </div>
                                <div class="col-sm-3 padding-0">
                                  <input type="radio" name="option"> Agitado
                                </div>

                              </div>
                            </div>




                            <div class="form-group"><label class="col-sm-3 control-label text-right">Dorme em cama individual?</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>


                            <div class="form-group"><label class="col-sm-3 control-label text-right">Dorme com alguém no quarto</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Dormiu/dorme no quarto dos pais?</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>
                            <div class="form-group"><label class="col-sm-3 control-label text-right">Existe atitude de separação?</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                              </div>
                            </div>
                          </div>
                        </div>
                      </div>







                       <!--HÁBITOS-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Hábitos</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">



                          <div class="form-group"><label class="col-sm-3 control-label text-right">Hábitos:</label>
                              <div class="col-sm-8">
                                <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Onicofagia
                                </div>
                                <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Chupeta
                                </div>
                                <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Dedo
                                  </div>
                                   <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Outros
                                  </div>
                              </div>
                            </div>


                     <div class="form-group"><label class="col-sm-3 control-label text-right">Outros:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>



                             <div class="form-group"><label class="col-sm-3 control-label text-right">Atitude da família:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                        </div>
                            </div>
                          </div>
                        </div>
                      </div>






                       <!--TIQUES-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Tiques</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">



                                <div class="form-group"><label class="col-sm-3 control-label text-right">Tiques:</label>
                              <div class="col-sm-9">
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Sim
                                </div>
                                <div class="col-sm-10 padding-0">
                                  <input type="radio" name="option"> Não
                                </div>

                              </div>
                            </div>


                            <div class="form-group"><label class="col-sm-3 control-label text-right">Descrição:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Idade de aquisição:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>


                             <div class="form-group"><label class="col-sm-3 control-label text-right">Atitude da família:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                        </div>
                            </div>
                          </div>
                        </div>
                      </div>




                       <!--SEXUALIDADE-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Sexualidade</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">




                             <div class="form-group"><label class="col-sm-3 control-label text-right">Descrição:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                        </div>
                            </div>
                          </div>
                        </div>
                      </div>



                      <!--SOCIABILIDADE-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Sociabilidade</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">



                             <div class="form-group"><label class="col-sm-3 control-label text-right">Tem amigos?</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>


                             <div class="form-group"><label class="col-sm-3 control-label text-right">Em relação ao grupo familiar?</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>


                             <div class="form-group"><label class="col-sm-3 control-label text-right">Em relação ao grupo escolar?</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>


                             <div class="form-group"><label class="col-sm-3 control-label text-right">Em relação aos vizinhos?</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                        </div>
                            </div>
                          </div>
                        </div>
                      </div>



                      <!--ESCOLARIDADE-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Escolaridade</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">



                             <div class="form-group"><label class="col-sm-3 control-label text-right">Idade de ingresso</label>
                              <div class="col-sm-2"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Reação:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Alfabetização:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Repetição:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>


                             <div class="form-group"><label class="col-sm-3 control-label text-right">Dificuldades específicas:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Ano escolar:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                            <div class="form-group"><label class="col-sm-3 control-label text-right">Turno atual:</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>


                             <div class="form-group"><label class="col-sm-3 control-label text-right">Horário e método de estudos em casa?</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>


                             <div class="form-group"><label class="col-sm-3 control-label text-right">Em relação aos vizinhos?</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                        </div>
                            </div>
                          </div>
                        </div>
                      </div>


                        <!--HUMOR-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Quanto ao humor</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">

                          <div class="form-group"><label class="col-sm-3 control-label text-right">Descrição:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                           </div>
                            </div>
                          </div>
                        </div>
                      </div>



                        <!--PUNIÇÃO-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Quanto à punição quando necessária</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">

                           <div class="form-group"><label class="col-sm-3 control-label text-right">Qual tipo é aplicada?</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                          <div class="form-group"><label class="col-sm-3 control-label text-right">Atende melhor à autoridade de quem?</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>

                           </div>
                            </div>
                          </div>
                        </div>
                      </div>



                        <!--ANTECEDENTES PATOLÓGICOS DA CRIANÇA-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Antecedentes patológicos da criança</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">


                                 <div class="form-group"><label class="col-sm-3 control-label text-right">Selecione:</label>
                              <div class="col-sm-8">
                                 <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Convulsões
                                </div>
                                <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Desmaios
                                </div>
                                <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Queda ou T.C
                                </div>
                                <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Cirurgia
                                  </div>
                                   <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Outros
                                  </div>
                              </div>
                            </div>


                           <div class="form-group"><label class="col-sm-3 control-label text-right">Especifique:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>



                           </div>
                            </div>
                          </div>
                        </div>
                      </div>




                        <!--ANTECEDENTES PATOLÓGICOS DOS FAMILIARES-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Antecedentes patológicos dos familiares</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">


                                 <div class="form-group"><label class="col-sm-3 control-label text-right">Selecione:</label>
                              <div class="col-sm-8">
                                 <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Alcoolismo
                                </div>
                                <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Desordens psíquicas
                                </div>
                                <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Epilepsia
                                </div>
                                <div class="col-sm-3 padding-0">
                                  <input type="checkbox" name="option"> Outros
                                  </div>
                              </div>
                            </div>


                           <div class="form-group"><label class="col-sm-3 control-label text-right">Especifique:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>



                           </div>
                            </div>
                          </div>
                        </div>
                      </div>


                            <!--AMBIENTE FAMILIAR-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Ambiente Familiar</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">


                             <div class="form-group"><label class="col-sm-3 control-label text-right">Irmãos?</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                               <div class="form-group"><label class="col-sm-3 control-label text-right">Mesmo casamento?</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>

                               <div class="form-group"><label class="col-sm-3 control-label text-right">Moram juntos?</label>
                              <div class="col-sm-9"><input type="text" class="form-control border-bottom"></div>
                            </div>



                           <div class="form-group"><label class="col-sm-3 control-label text-right">Demais residentes:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>


                           <div class="form-group"><label class="col-sm-3 control-label text-right">Diversão da família?</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>


                           <div class="form-group"><label class="col-sm-3 control-label text-right">Convivência?</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>
                            </div>



                           </div>
                            </div>
                          </div>
                        </div>
                      </div>




                            <!--RELIGIÃO-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Religião</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">


                           <div class="form-group"><label class="col-sm-3 control-label text-right">Descrição:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>                            </div>



                           </div>
                            </div>
                          </div>
                        </div>
                      </div>



                                 <!--ATITUDE DO ENTREVISTADO-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Atitude do Entrevistado</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">


                           <div class="form-group"><label class="col-sm-3 control-label text-right">Descrição:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>                            </div>



                           </div>
                            </div>
                          </div>
                        </div>
                      </div>

                              <!--OBSERVAÇÕES ADICIONAIS-->
                <div class="form-element">
                  <div class="col-md-12 padding-0">
                    <div class="col-md-8">
                      <div class="panel form-element-padding">
                        <div class="panel-heading">
                         <h4>Observações adicionais</h4>
                        </div>

                         <div class="panel-body" style="padding-bottom:30px;">


                           <div class="form-group"><label class="col-sm-3 control-label text-right">Descrição:</label>
                              <div class="col-sm-9"><TEXTAREA NAME="Address" ROWS=2 COLS=60>
                              </TEXTAREA class="form-control border-bottom"></div>                            </div>



                                 <div class="form-group"><label class="col-sm-3 control-label text-right">Data:</label>
                              <div class="col-sm-3"><input type="text" class="form-control border-bottom"></div>
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



</div>
</html>
