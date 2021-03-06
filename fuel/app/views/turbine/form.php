<!-- Add wind turbine -->

    <div class="row">
        <div class="clearness col-sm-12">

            <div class="row">
                <div class="lead col-sm-12">
                    <h1>Ajout d'une éolienne</h1>
                </div>
            </div>

<?php if (isset($messages) and !empty($messages)) : ?>
            <div class="alert alert-danger" role="alert">
                <ul>
    <?php foreach ($messages as $message) : ?>
                    <li><?php echo $message ?></li>
    <?php endforeach ?>
                </ul>
            </div>
<?php endif ?>

            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <form class="form-horizontal marginLR" method="post">
                        <div class="form-group">
                            <legend>Paramétrage de l'éolienne</legend>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
      <!----------------------------------------------------------------------Wind turbine parameters------------------------------------------------------------>

                      <div>

                            <div id="divTurbineManufacturer" class="form-group">
                                <div class="col-md-4">
                                    <label for="turbManufacturer" class="control-label">Constructeur : </label>
                                    <br>
                                    <span class="error help-block">1 à 20 caractères</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="col-xs-7">
                                        <input id="turbManufacturer" type="text" name="turbine_manufacturer" value="<?php echo $turbine['turbine_manufacturer'] ?>" class="form-control"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback error"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback good"></span>
                                </div>
                                <div class="col-xs-1">
                                    <div class="pop">
                                        <a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
                                           data-content="Entrer un nom de constructeur pour cette éolienne entre 1 et 20 caractères."
                                           title="<b>AIDE : Constructeur de l'éolienne</b>">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                          
                          <div id="divTurbName" class="form-group">
                                <div class="col-md-4">
                                    <label for="turbName" class="control-label">Modèle : </label>
                                    <br>
                                    <span class="error help-block">1 à 30 caractères</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="col-xs-7">
                                        <input id="turbName" type="text" name="turbine_name" value="<?php echo $turbine['turbine_name'] ?>" class="form-control"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback error"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback good"></span>
                                </div>
                                <div class="col-xs-1">
                                    <div class="pop">
                                        <a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
                                           data-content="Entrer un nom de modèle pour cette éolienne entre 1 et 30 caractères."
                                           title="<b>AIDE : Modèle de l'éolienne</b>">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <div id="divNbBlade" class="form-group">
                                <div class="col-md-5">
                                    <label for="nbBlade" class="control-label">Nombre de pales : </label>
                                    <br>
                                    <span class="error help-block">De 1 à 50 pales</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="col-xs-6">
                                    <input id="nbBlade" type="text" name="turbine_blades" value="<?php echo $turbine['turbine_blades'] ?>" class="form-control" placeholder="3"/>
                                    <span class="glyphicon glyphicon-remove form-control-feedback error"></span>
                                    <span class="glyphicon glyphicon-ok form-control-feedback good"></span>
                                </div>
                                <div class="col-xs-1">
                                    <div class="pop">
                                        <a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
                                           data-content="Entrer le nombre de pales de l'éolienne (entre 1 et 50 pales)."
                                           title="<b>AIDE : Nombre de pales de l'éolienne</b>">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                          
                            <div id="divNominalPower" class="form-group">
                                <div class="col-lg-5">
                                    <label for="nominalPower" class="control-label">Puissance nominale : </label>
                                    <br>
                                    <span class="error help-block">De 1 à 10000kW</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <input id="nominalPower" type="text" name="turbine_power" value="<?php echo $turbine['turbine_power'] ?>" class="form-control" placeholder="1500"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback error shift4"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback good shift4"></span>
                                        <span class="input-group-addon">kW</span>
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="pop">
                                        <a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
                                           data-content="Entrer la puissance nominale de l'éolienne (de 1 à 10 000 kW).<br><br>
                                           <i>La puissance nominale est la puissance maximale pouvant être délivrée par l'éolienne.</i><br><br>
                                           <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur<br>décimal.</span>"
                                           title="<b>AIDE : Puissance nominale de l'éolienne</b>">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <div id="divDiameter" class="form-group">
                                <div class="col-lg-5">
                                    <label for="diameter" class="control-label">Diamètre du rotor : </label>
                                    <br>
                                    <span class="error help-block">De 1 à 500m</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <input id="diameter" type="text" name="turbine_diameter" value="<?php echo $turbine['turbine_diameter'] ?>" class="form-control" placeholder="40"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback error shift2"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback good shift2"></span>
                                        <span class="input-group-addon">m</span>
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="pop">
                                        <a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
                                           data-content="Entrer le diamètre du rotor de l'éolienne (de 1 à 500 m).<br><br>
                                           <i>Le rotor est la partie tournante de l'éolienne. Il est composé des pales et du moyeu en son centre.</i><br><br>
                                           <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur<br>décimal.</span>"
                                           title="<b>AIDE : Diamètre du rotor</b>">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <div id="divHeight" class="form-group">
                                <div class="col-lg-5">
                                    <label for="height" class="control-label">Hauteur du moyeu :</label>
                                    <br>
                                    <span class="error help-block">De 1 à 300m</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <input id="height" type="text" name="turbine_height" value="<?php echo $turbine['turbine_height'] ?>" class="form-control" placeholder="60"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback error shift2"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback good shift2"></span>
                                        <span class="input-group-addon">m</span>
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="pop">
                                        <a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
                                           data-content="Entrer la hauteur du moyeu l'éolienne (de 1 à 300 m).<br><br>
                                           <i>Le moyeu de l'éolienne est la pièce rotative en haut de mat qui reçoit les pales.</i><br><br>
                                           <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur<br>décimal.</span>"
                                           title="<b>AIDE : Hauteur du moyeu</b>">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <div id="divCutInSpeed" class="form-group">
                                <div class="col-lg-5">
                                    <label for="cut-inSpeed" class="control-label">Vitesse de démarrage : </label>
                                    <span class="error help-block">De 0.01 à 20m/s</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <input id="cut-inSpeed" type="text" name="turbine_start_speed" value="<?php echo $turbine['turbine_start_speed'] ?>" class="form-control" placeholder="3,0"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback error shift5"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback good shift5"></span>
                                        <span class="input-group-addon">m/s</span>
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="pop">
                                        <a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
                                           data-content="Entrer la vitesse de démarrage de l'éolienne (entre 0.01 et 20 m/s).<br><br>
                                           <i>La vitesse de démarrage de l'éolienne est la vitesse à partir de laquelle l'éolienne commence à tourner et à produire de l'électricité.</i><br><br>
                                           <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur<br>décimal.</span>"
                                           title="<b>AIDE : Vitesse de démarrage</b>">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <div id="divCutOutSpeed" class="form-group">
                                <div class="col-lg-5">
                                    <label for="cut-outSpeed" class="control-label">Vitesse de coupure : </label>
                                    <span class="error help-block">De 10 à 40m/s</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="col-xs-6">
                                    <div class="input-group">
                                        <input id="cut-outSpeed" type="text" name="turbine_stop_speed" value="<?php echo $turbine['turbine_stop_speed'] ?>" class="form-control" placeholder="25"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback error shift5"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback good shift5"></span>
                                        <span class="input-group-addon">m/s</span>
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="pop">
                                        <a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
                                           data-content="Entrer la vitesse de coupure de l'éolienne (entre 10 et 40 m/s).<br><br>
                                           <i>La vitesse de coupure de l'éolienne est la vitesse à laquelle l'éolienne s'arrête de tourner par sécurité.</i><br><br>
                                           <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur<br>décimal.</span>"
                                           title="<b>AIDE : Vitesse de coupure</b>">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                          
                      </div>

      <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->                          
                            </div>

                            <div class="col-sm-offset-1 col-sm-5">
      <!----------------------------------------------------------------------Power curve-------------------------------------------------------------->
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <b>Courbe de puissance</b>
                                        <a href="#pop" class="pop pull-right" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto" style="margin-top: 1px"
                                           data-content="Entrer, pour chaque valeur de vent, la puissance de sortie de l'éolienne (en kW).<br><br>
                                           <i>La courbe de puissance est un graphe qui représente la puissance de sortie d'une éolienne à différentes vitesses de vent.</i><br><br>
                                           <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
                                           title="<b>AIDE : Courbe de puissance</b>">
                                            <span class="glyphicon glyphicon-question-sign"></span>
                                        </a>
                                    </div>

                                    <div class="panel-body">

                                        <br/>
                                        <div id="displayWindTable">
                                            <div id="powerDistributionChart"></div>
                                            <div class="col-sm-12">
                                                <div class="table-responsive">
                                                    <table id="windTable" class="table table-striped table-condensed">

                                                        <tr>
                                                                <th>Vitesse [m/s]</th>
                                                                <th>Puissance [kW]</th>
                                                                <th>Vitesse [m/s]</th>
                                                                <th>Puissance [kW]</th>
                                                        </tr>
    <?php $i = 0; $c = 2 ?>
    <?php foreach ($turbine['powers'] as $power) : ?>
    <?php if ($i % $c == 0) : ?>
                                                        <tr>
    <?php endif ?>
                                                                <td><?php echo $power->wind_speed ?></td>
                                                                <td><input type="text" id="power<?php echo $power->wind_speed ?>" name="turbine_power_<?php echo $power->wind_speed ?>" value="<?php echo $power->turbine_power ?>" class="form-control input-sm"/></td>
    <?php if ($i % $c == $c - 1) : ?>
                                                                <td></td>
                                                        </tr>
    <?php endif ?>
    <?php $i++ ?>
    <?php endforeach ?>                             </table>
                                                </div>
                                                <span class="error help-block">Les puissances saisies doivent être comprises entre 0kW et la puissance nominale.</span>
                                                <span class="good help-block"></span>
                                            </div>
                                            
                                        </div>

                                    </div>

                                </div>
      <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="pull-right btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> &nbsp; Valider</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>


<!-------------------------------------------------------------------------JavaScript-------------------------------------------------------------->

<script type="text/javascript">
var windSpeed =0;

//generation of feedback icons for each input
$(function () {
        //plot a chart when the page is loaded
        $('#powerDistributionChart').highcharts({
                chart: {
                    type: 'spline'
                },
                title: {
                    text: 'Courbe de puissance'
                },
                xAxis: {
                    title: {
                        text: 'Vitesse de vent (m/s)'
                    },
                    tickInterval: 5,
                    min: 0,
                    max: 30
                },
                yAxis: [{
                    title: {
                        text: 'Puissance (kW)'
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
                            name: 'Puissance éolienne',
                            data: [<?php foreach ($turbine['powers'] as $power) printf('[%f,%f],', $power->wind_speed, $power->turbine_power) ?>]
                        }]
                });
        
        //input verification and feedback when the user modifies the manufacturer
        $('#turbManufacturer').keyup(function() {
            $('#divTurbineManufacturer').addClass('has-feedback');
            $('#turbManufacturer').val().length > 0 && $('#turbManufacturer').val().length <=20 ? $('#divTurbineManufacturer').addClass('has-success').removeClass('has-error') && $('#divTurbineManufacturer').find('.good').show() && $('#divTurbineManufacturer').find('.error').hide() : $('#divTurbineManufacturer').addClass('has-error').removeClass('has-success') && $('#divTurbineManufacturer').find('.error').show() && $('#divTurbineManufacturer').find('.good').hide();       
        });
        
        //input verification and feedback when the user modifies the model
        $('#turbName').keyup(function() {
            $('#divTurbName').addClass('has-feedback');
            $('#turbName').val().length > 0 && $('#turbName').val().length <=30 ? $('#divTurbName').addClass('has-success').removeClass('has-error') && $('#divTurbName').find('.good').show() && $('#divTurbName').find('.error').hide() : $('#divTurbName').addClass('has-error').removeClass('has-success') && $('#divTurbName').find('.error').show() && $('#divTurbName').find('.good').hide();       
        });
        
        //input verification and feedback when the user modifies the number of blades
        $('#nbBlade').keyup(function() {
            $('#divNbBlade').addClass('has-feedback');
            $('#nbBlade').val() > 0 && $('#nbBlade').val() <=50 && parseFloat($('#nbBlade').val()) === parseInt($('#nbBlade').val()) && $('#nbBlade').val() !== '' ? $('#divNbBlade').addClass('has-success').removeClass('has-error') && $('#divNbBlade').find('.good').show() && $('#divNbBlade').find('.error').hide() : $('#divNbBlade').addClass('has-error').removeClass('has-success') && $('#divNbBlade').find('.error').show() && $('#divNbBlade').find('.good').hide();       
        });
        
        //input verification and feedback when the user modifies the nominal power
        $('#nominalPower').keyup(function() {
            $('#divNominalPower').addClass('has-feedback');
            $('#nominalPower').val() > 0 && $('#nominalPower').val() <=10000 && $('#nominalPower').val() !== '' ? $('#divNominalPower').addClass('has-success').removeClass('has-error') && $('#divNominalPower').find('.good').show() && $('#divNominalPower').find('.error').hide() : $('#divNominalPower').addClass('has-error').removeClass('has-success') && $('#divNominalPower').find('.error').show() && $('#divNominalPower').find('.good').hide();       
        });
        
        //input verification and feedback when the user modifies the rotor diameter
        $('#diameter').keyup(function() {
            $('#divDiameter').addClass('has-feedback');
            $('#diameter').val() > 0 && $('#diameter').val() <=500 && $('#diameter').val() !== '' ? $('#divDiameter').addClass('has-success').removeClass('has-error') && $('#divDiameter').find('.good').show() && $('#divDiameter').find('.error').hide() : $('#divDiameter').addClass('has-error').removeClass('has-success') && $('#divDiameter').find('.error').show() && $('#divDiameter').find('.good').hide();       
        });
        
        //input verification and feedback when the user modifies the height
        $('#height').keyup(function() {
            $('#divHeight').addClass('has-feedback');
            $('#height').val() > 0 && $('#height').val() <=300 && $('#height').val() !== '' ? $('#divHeight').addClass('has-success').removeClass('has-error') && $('#divHeight').find('.good').show() && $('#divHeight').find('.error').hide() : $('#divHeight').addClass('has-error').removeClass('has-success') && $('#divHeight').find('.error').show() && $('#divHeight').find('.good').hide();       
        });
        
        //input verification and feedback when the user modifies the cut-in speed
        $('#cut-inSpeed').keyup(function() {
            $('#divCutInSpeed').addClass('has-feedback');
            $('#cut-inSpeed').val() > 0 && $('#cut-inSpeed').val() <=20 && $('#cut-inSpeed').val() !== '' ? $('#divCutInSpeed').addClass('has-success').removeClass('has-error') && $('#divCutInSpeed').find('.good').show() && $('#divCutInSpeed').find('.error').hide() : $('#divCutInSpeed').addClass('has-error').removeClass('has-success') && $('#divCutInSpeed').find('.error').show() && $('#divCutInSpeed').find('.good').hide();       
        });
        
        //input verification and feedback when the user modifies the cut-out speed
        $('#cut-outSpeed').keyup(function() {
        $('#divCutOutSpeed').addClass('has-feedback');
        $('#cut-outSpeed').val() >= 10 && $('#cut-outSpeed').val() <=40 && $('#cut-outSpeed').val() !== '' ? $('#divCutOutSpeed').addClass('has-success').removeClass('has-error') && $('#divCutOutSpeed').find('.good').show() && $('#divCutOutSpeed').find('.error').hide() : $('#divCutOutSpeed').addClass('has-error').removeClass('has-success') && $('#divCutOutSpeed').find('.error').show() && $('#divCutOutSpeed').find('.good').hide();       
        });
        
        //
        $('form').on('focusout', "input[id*='power']", function() {
            $('#displayWindTable').addClass('has-feedback');
            var chart = $('#powerDistributionChart').highcharts();
            chart.series[0].update({
                data: []
            });
            for(var v=0;v < 31;v++){
                if($('#power'+v+'').val() >= 0 && $('#power'+v+'').val() <= parseInt($('#nominalPower').val()) && $('#power'+v+'').val() !== ''){
                    $('#displayWindTable').addClass('has-success').removeClass('has-error') && $('#displayWindTable').find('.good').show() && $('#displayWindTable').find('.error').hide();
                    chart.series[0].addPoint([v,parseFloat($('#power'+v+'').val())]); 
                }
                else {
                    $('#displayWindTable').addClass('has-error').removeClass('has-success') && $('#displayWindTable').find('.error').show() && $('#displayWindTable').find('.good').hide();
                    chart.series[0].update({
                        data: []
                    });
                    break;
                }
            }
        });
        
        
});


//popover
$(function (){
   $(".pop").popover(); 
});
// Contain the popover within the body NOT the element it was called in.
$('[data-toggle="popover"]').popover({
    container: 'body'
});


</script>