<!-- Results -->

        <div class="row">
            <div class="clearness col-sm-12">
                
                <div class="row">
                    <div class="lead col-sm-3">
                        <h1>Résultats</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-6">
                       <table class="table table-responsive table-striped table-condensed">
                          <tr>
                              <td><b>&nbsp; Puissance moyenne surfacique en entrée :</b></td><td> XXXX </td><td>W/m<sup>2</sup></td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Puissance moyenne en entrée :</td><td> XXXX </td><td>kWh</td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Vitesse de vent pour puissance maximale :</td><td> XXXX </td><td>m/s</td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Vitesse moyenne à hauteur du moyeu :</td><td> XXXX </td><td>m/s</td>
                          </tr>
                        </table>
                    </div>
                    <div class="col-sm-6">
                       <table class="table table-responsive table-striped table-condensed">
                          <tr>
                            <td><b>&nbsp; Puissance moyenne surfacique en sortie :</td><td> <?php echo $power_mean ?> </td><td>W/m<sup>2</sup></td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Puissance moyenne en sortie :</td><td> XXXX </td><td>kW</td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Production totale annuelle :</td><td> <?php echo $production ?> </td><td>kWh/an</td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Facteur de charge :</td><td> <?php echo $charge_factor ?> </td><td>%</td>
                          </tr>
                        </table>
                    </div>
                </div>
                        
                
                
                 <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Distribution des vents</div>
                                <div class="panel-body"><br>
                                      <span class="btn btn-info btn-xs pull-left" id="displayTab1"><span class="glyphicon glyphicon-plus"></span>Afficher/Masquer tableau</span><br><br>
                                        <table id="tab1" class="table table-striped table-condensed">
                                                <tbody><tr>
                                                        <th>Vitesse stabilisée [m/s]</th>
                                                        <th>Weibull à l'altitude du site [%]</th>
                                                        <th>Weibull à la hauteur du moyeu [%]</th>
                                                </tr>
                                                <tr><td>0</td><td></td><td></td></tr>
                                                <tr><td>1</td><td></td><td></td></tr>
                                                <tr><td>2</td><td></td><td></td></tr>
                                                <tr><td>3</td><td></td><td></td></tr>
                                                <tr><td>4</td><td></td><td></td></tr>
                                                <tr><td>5</td><td></td><td></td></tr>
                                                <tr><td>6</td><td></td><td></td></tr>
                                                <tr><td>7</td><td></td><td></td></tr>
                                                <tr><td>8</td><td></td><td></td></tr>
                                                <tr><td>9</td><td></td><td></td></tr>
                                                <tr><td>10</td><td></td><td></td></tr>
                                                <tr><td>11</td><td></td><td></td></tr>
                                                <tr><td>12</td><td></td><td></td></tr>
                                                <tr><td>13</td><td></td><td></td></tr>
                                                <tr><td>14</td><td></td><td></td></tr>
                                                <tr><td>15</td><td></td><td></td></tr>
                                                <tr><td>16</td><td></td><td></td></tr>
                                                <tr><td>17</td><td></td><td></td></tr>
                                                <tr><td>18</td><td></td><td></td></tr>
                                                <tr><td>19</td><td></td><td></td></tr>
                                                <tr><td>20</td><td></td><td></td></tr>
                                                <tr><td>21</td><td></td><td></td></tr>
                                                <tr><td>22</td><td></td><td></td></tr>
                                                <tr><td>23</td><td></td><td></td></tr>
                                                <tr><td>24</td><td></td><td></td></tr>
                                                <tr><td>25</td><td></td><td></td></tr>
                                                <tr><td>26</td><td></td><td></td></tr>
                                                <tr><td>27</td><td></td><td></td></tr>
                                                <tr><td>28</td><td></td><td></td></tr>
                                                <tr><td>29</td><td></td><td></td></tr>
                                                <tr><td>30</td><td></td><td></td></tr>
                                        </tbody></table>
                                 </div>
                            </div>
                        </div>
                     
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Caractérisation de l'éolienne</div>
                                <div class="panel-body"><br>
                                    <span class="btn btn-info btn-xs pull-left" id="displayTab2"><span class="glyphicon glyphicon-plus"></span>Afficher / masquer tableau</span><br><br>
                                    <table id="tab2" class="table table-striped table-condensed">
                                            <tbody><tr>
                                                    <th>Vitesse stabilisée [m/s]</th>
                                                    <th>Puissance [kW]</th>
                                                    <th>Cp</th>
                                            </tr>
                                            <tr><td>0</td><td></td><td></td></tr>
                                            <tr><td>1</td><td></td><td></td></tr>
                                            <tr><td>2</td><td></td><td></td></tr>
                                            <tr><td>3</td><td></td><td></td></tr>
                                            <tr><td>4</td><td></td><td></td></tr>
                                            <tr><td>5</td><td></td><td></td></tr>
                                            <tr><td>6</td><td></td><td></td></tr>
                                            <tr><td>7</td><td></td><td></td></tr>
                                            <tr><td>8</td><td></td><td></td></tr>
                                            <tr><td>9</td><td></td><td></td></tr>
                                            <tr><td>10</td><td></td><td></td></tr>
                                            <tr><td>11</td><td></td><td></td></tr>
                                            <tr><td>12</td><td></td><td></td></tr>
                                            <tr><td>13</td><td></td><td></td></tr>
                                            <tr><td>14</td><td></td><td></td></tr>
                                            <tr><td>15</td><td></td><td></td></tr>
                                            <tr><td>16</td><td></td><td></td></tr>
                                            <tr><td>17</td><td></td><td></td></tr>
                                            <tr><td>18</td><td></td><td></td></tr>
                                            <tr><td>19</td><td></td><td></td></tr>
                                            <tr><td>20</td><td></td><td></td></tr>
                                            <tr><td>21</td><td></td><td></td></tr>
                                            <tr><td>22</td><td></td><td></td></tr>
                                            <tr><td>23</td><td></td><td></td></tr>
                                            <tr><td>24</td><td></td><td></td></tr>
                                            <tr><td>25</td><td></td><td></td></tr>
                                            <tr><td>26</td><td></td><td></td></tr>
                                            <tr><td>27</td><td></td><td></td></tr>
                                            <tr><td>28</td><td></td><td></td></tr>
                                            <tr><td>29</td><td></td><td></td></tr>
                                            <tr><td>30</td><td></td><td></td></tr>
                                    </tbody></table>
                             </div>
                        </div>
                    </div>
                 </div>
                
                  <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Puissance produite</div>
                                <div class="panel-body"><br>
                                    <span class="btn btn-info btn-xs pull-left" id="displayTab3"><span class="glyphicon glyphicon-plus"></span>Afficher / masquer tableau</span><br><br>
                                    <table id="tab3" class="table table-striped table-condensed nodisplay">
                                            <tbody><tr>
                                                    <th>Vitesse stabilisée [m/s]</th>
                                                    <th>Puissance produite [kW]</th>
                                            </tr>
                                            <tr><td>0</td><td></td></tr>
                                            <tr><td>1</td><td></td></tr>
                                            <tr><td>2</td><td></td></tr>
                                            <tr><td>3</td><td></td></tr>
                                            <tr><td>4</td><td></td></tr>
                                            <tr><td>5</td><td></td></tr>
                                            <tr><td>6</td><td></td></tr>
                                            <tr><td>7</td><td></td></tr>
                                            <tr><td>8</td><td></td></tr>
                                            <tr><td>9</td><td></td></tr>
                                            <tr><td>10</td><td></td></tr>
                                            <tr><td>11</td><td></td></tr>
                                            <tr><td>12</td><td></td></tr>
                                            <tr><td>13</td><td></td></tr>
                                            <tr><td>14</td><td></td></tr>
                                            <tr><td>15</td><td></td></tr>
                                            <tr><td>16</td><td></td></tr>
                                            <tr><td>17</td><td></td></tr>
                                            <tr><td>18</td><td></td></tr>
                                            <tr><td>19</td><td></td></tr>
                                            <tr><td>20</td><td></td></tr>
                                            <tr><td>21</td><td></td></tr>
                                            <tr><td>22</td><td></td></tr>
                                            <tr><td>23</td><td></td></tr>
                                            <tr><td>24</td><td></td></tr>
                                            <tr><td>25</td><td></td></tr>
                                            <tr><td>26</td><td></td></tr>
                                            <tr><td>27</td><td></td></tr>
                                            <tr><td>28</td><td></td></tr>
                                            <tr><td>29</td><td></td></tr>
                                            <tr><td>30</td><td></td></tr>
                                    </tbody></table>
                                </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">Densité de puissance</div>
                            <div class="panel-body"><br>
                                    <span class="btn btn-info btn-xs pull-left" id="displayTab4"><span class="glyphicon glyphicon-plus"></span>Afficher / masquer tableau</span><br><br>
                                    <table id="tab4" class="table table-striped table-condensed nodisplay">
                                            <tbody><tr>
                                                    <th>Vitesse stabilisée [m/s]</th>
                                                    <th>Densité de puissance en entrée [w/m<sup>2</sup>]</th>
                                                    <th>Densité de puissance en entrée avec limite de Betz [w/m<sup>2</sup>]</th>
                                                    <th>Densité de puissance en sortie [w/m<sup>2</sup>]</th>
                                            </tr>
<?php for ($i = 0; $i < 301; $i++) : ?>
                                            <tr><td><?php echo $i ?></td><td><?php echo $density_input[$i] ?></td><td></td><td><?php echo $density_output[$i] ?></td></tr>
<?php endfor ?>
                                    </tbody></table>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    
                </div>
                
            </div>
        </div>

<!-------------------------------------------------------------------------JavaScript------------------------------------------------------------>

<script type="text/javascript">

$(function () {
		$('#displayTab1').click(function() {
                    $('#tab1').css('display') === 'none' ? $('#tab1').css({'display': 'inline'}) : $('#tab1').css({'display': 'none'});
                });
                $('#displayTab2').click(function() {
                    $('#tab2').css('display') === 'none' ? $('#tab2').css({'display': 'inline'}) : $('#tab2').css({'display': 'none'});
                });
                $('#displayTab3').click(function() {
                    $('#tab3').css('display') === 'none' ? $('#tab3').css({'display': 'inline'}) : $('#tab3').css({'display': 'none'});
                });
                $('#displayTab4').click(function() {
                    $('#tab4').css('display') === 'none' ? $('#tab4').css({'display': 'inline'}) : $('#tab4').css({'display': 'none'});
                });
                
            });
                

     
</script>