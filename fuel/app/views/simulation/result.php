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
                              <td><b>&nbsp; Puissance moyenne surfacique en entrée :</b></td><td> <?php echo round($density_mean_input, 2) ?> </td><td>W/m<sup>2</sup></td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Puissance moyenne en entrée :</td><td> <?php echo round($power_mean_input / 1000, 2) ?> </td><td>kW</td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Vitesse de vent pour puissance maximale :</td><td> <?php echo round($max_wind_speed, 2) ?> </td><td>m/s</td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Vitesse moyenne à hauteur du moyeu :</td><td> <?php echo round($moyeu_mean_speed, 2) ?> </td><td>m/s</td>
                          </tr>
                        </table>
                    </div>
                    <div class="col-sm-6">
                       <table class="table table-responsive table-striped table-condensed">
                          <tr>
                            <td><b>&nbsp; Puissance moyenne surfacique en sortie :</td><td> <?php echo round($density_mean_output, 2) ?> </td><td>W/m<sup>2</sup></td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Puissance moyenne en sortie :</td><td> <?php echo round($power_mean, 2) ?> </td><td>kW</td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Production totale annuelle :</td><td> <?php echo round($production, 2) ?> </td><td>kWh/an</td>
                          </tr>
                          <tr>
                            <td><b>&nbsp; Facteur de charge :</td><td> <?php echo round($charge_factor * 100, 2) ?> </td><td>%</td>
                          </tr>
                        </table>
                    </div>
                </div>
                        
                
                
                 <div class="row">
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Distribution des vents</div>
                                <div class="panel-body"><br>
                                      <div id="chart1"></div>
                                      <span class="btn btn-info btn-xs pull-left" id="displayTab1"><span class="glyphicon glyphicon-list"></span>&nbsp; Afficher / Masquer tableau</span><br><br>
                                        <table id="tab1" class="table table-striped table-condensed">
                                                <tbody><tr>
                                                        <th>Vitesse stabilisée [m/s]</th>
                                                        <th>Weibull à l'altitude du site [%]</th>
                                                        <th>Weibull à la hauteur du moyeu [%]</th>
                                                </tr>
<?php for ($i = 0; $i <= 30; $i++) : ?>
                                                <tr><td><?php echo round($i, 2) ?></td><td><?php echo round($weibull_measure[$i] * 100, 2) ?></td><td><?php echo round($weibull_moyeu[$i] *100, 2) ?></td></tr>
<?php endfor ?>
                                        </tbody></table>
                                 </div>
                            </div>
                        </div>
                     
                    <div class="col-sm-6">
                        <div class="panel panel-default">
                            <div class="panel-heading">Caractérisation de l'éolienne</div>
                                <div class="panel-body"><br>
                                    <div id="chart2"></div>
                                    <span class="btn btn-info btn-xs pull-left" id="displayTab2"><span class="glyphicon glyphicon-list"></span>&nbsp; Afficher / masquer tableau</span><br><br>
                                    <table id="tab2" class="table table-striped table-condensed">
                                            <tbody><tr>
                                                    <th>Vitesse stabilisée [m/s]</th>
                                                    <th>Puissance [kW]</th>
                                                    <th>Cp</th>
                                            </tr>
<?php for ($i = 0; $i <= 30; $i++) : ?>
                                            <tr><td><?php echo $i ?></td><td><?php echo $turbine_power[$i] ?></td><td><?php echo $cp[$i] ?></td></tr>
<?php endfor ?>
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
                                    <div id="chart3"></div>
                                    <span class="btn btn-info btn-xs pull-left" id="displayTab3"><span class="glyphicon glyphicon-list"></span>&nbsp; Afficher / masquer tableau</span><br><br>
                                    <table id="tab3" class="table table-striped table-condensed nodisplay">
                                            <tbody><tr>
                                                    <th>Vitesse stabilisée [m/s]</th>
                                                    <th>Puissance produite [kW]</th>
                                            </tr>
<?php for ($i = 0; $i <= 30; $i++) : ?>
                                            <tr><td><?php echo $i ?></td><td><?php echo round($production_power[$i]/1000, 2) ?></td></tr>
<?php endfor ?>
                                    </tbody></table>
                                </div>
                        </div>
                    </div>
                    
                    <div class="col-sm-6">
                       <div class="panel panel-default">
                            <div class="panel-heading">Densité de puissance</div>
                            <div class="panel-body"><br>
                                    <div id="chart4"></div>
                                    <span class="btn btn-info btn-xs pull-left" id="displayTab4"><span class="glyphicon glyphicon-list"></span>&nbsp; Afficher / masquer tableau</span><br><br>
                                    <table id="tab4" class="table table-striped table-condensed nodisplay">
                                            <tbody><tr>
                                                    <th>Vitesse stabilisée [m/s]</th>
                                                    <th>Densité de puissance en entrée [w/m<sup>2</sup>]</th>
                                                    <th>Densité de puissance en entrée avec limite de Betz [w/m<sup>2</sup>]</th>
                                                    <th>Densité de puissance en sortie [w/m<sup>2</sup>]</th>
                                            </tr>
<?php for ($i = 0; $i <= 300; $i++) : ?>
                                            <tr><td><?php echo $i ?></td><td><?php echo round($density_input[$i], 2) ?></td><td><?php echo round($density_input_betz[$i], 2) ?></td><td><?php echo round($density_output[$i], 2) ?></td></tr>
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
                
                 $('#chart1').highcharts({
                    chart: {
                        type: 'spline'
                    },
                    title: {
                        text: 'Wind distribution'
                    },
                    xAxis: {
                        title: {
                            text: 'Wind speed (m/s)'
                        },
                        tickInterval: 5,
                        min: 0,
                        max: 30
                    },
                    yAxis: {
                        title: {
                            text: 'Probability (%)'
                        },
                        gridLineWidth: 1,
                        min: 0
                    },
                    plotOptions: {
                            series: {
                                marker: {
                                    enabled: false
                                }
                            }
                        },
                    series: [{ 
                                name: 'Weibull distribution',
                                data: [<?php for ($i = 0; $i <= 30; $i++) printf('[%f,%f],',$i ,$weibull_measure[$i] * 100) ?>]
                            }]
                    });
                    
                    $('#chart2').highcharts({
                        chart: {
                            type: 'spline'
                        },
                        title: {
                            text: 'Power curve'
                        },
                        xAxis: {
                            title: {
                                text: 'Wind speed (m/s)'
                            },
                            tickInterval: 5,
                            min: 0,
                            max: 30
                        },
                        yAxis: [{
                            title: {
                                text: 'Power (kW)'
                            },
                            gridLineWidth: 1,
                            min: 0
                        },{
                            title: {
                                text: 'Cp'
                            },
                            gridLineWidth: 1,
                            min: 0,
                            opposite: true
                        }],
                        plotOptions: {
                            series: {
                                marker: {
                                    enabled: false
                                }
                            }
                        },
                        series: [{ 
                                    name: 'Power',
                                    data: [<?php for ($i = 0; $i <= 30; $i++) printf('[%f,%f],', $i, $turbine_power[$i]) ?>]
                                },{
                                    name: 'Cp',
                                    yAxis: 1,
                                    data: [<?php for ($i = 0; $i <= 30; $i++) printf('[%f,%f],', $i, $cp[$i]) ?>]
                                }]
                        });
                        
                        $('#chart3').highcharts({
                        chart: {
                            type: 'spline'
                        },
                        title: {
                            text: 'Local production'
                        },
                        xAxis: {
                            title: {
                                text: 'Wind speed (m/s)'
                            },
                            tickInterval: 5,
                            min: 0,
                            max: 30
                        },
                        yAxis: [{
                            title: {
                                text: 'Production (kW)'
                            },
                            gridLineWidth: 1,
                            min: 0
                        }],
                        plotOptions: {
                            series: {
                                marker: {
                                    enabled: false
                                }
                            }
                        },
                        series: [{ 
                                    name: 'Production',
                                    data: [<?php for ($i = 0; $i <= 30; $i++) printf('[%f,%f],', $i, $production_power[$i]/1000)?>]
                                }]
                        });
                        
                        $('#chart4').highcharts({
                        chart: {
                            type: 'area'
                        },
                        
                        title: {
                            text: 'Power density'
                        },
                        xAxis: {
                            title: {
                                text: 'Wind speed (m/s)'
                            },
                            tickInterval: 5,
                            min: 0,
                            max: 30
                        },
                        yAxis: [{
                            title: {
                                text: 'Power density (kW)'
                            },
                            gridLineWidth: 1,
                            min: 0
                        }],

                        series: [{ 
                                    name: 'Input power density',
                                    data: [<?php for ($i = 0; $i <= 300; $i++) printf('[%f,%f],', $i/10, $density_input[$i])?>]
                                },{
                                    name: 'Input power density with Betz',
                                    data: [<?php for ($i = 0; $i <= 300; $i++) printf('[%f,%f],', $i/10, $density_input_betz[$i])?>]
                                },{
                                    name: 'Output density power',
                                    data: [<?php for ($i = 0; $i <= 300; $i++) printf('[%f,%f],', $i/10, $density_output[$i])?>]
                                }]
                        });
                        

                    });
                

     
</script>