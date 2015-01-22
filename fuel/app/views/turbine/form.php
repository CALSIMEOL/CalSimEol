<!-- Simulation - Wind turbine parameters -->

    <div class="row">
        <div class="clearness col-sm-12">

            <div class="row">
                <div class="lead col-sm-3">
                    <h1>Simulation</h1>
                </div>
            </div>

<?php if (isset($messages)) : ?>
    <?php foreach ($messages as $message) : ?>
            <div class="alert alert-danger" role="alert"><?php echo $message ?></div>
    <?php endforeach ?>
<?php endif ?>

            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <form class="form-horizontal marginLR" method="post">
                        <input id="nbPowerLines" name="nbPowerLines" type="hidden"/>   
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
                                           <i>Le rotor est la partie tourante de l'éolienne. Il est composé des pales et du moyeu en son centre.</i><br><br>
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
                                           <i>Le moyeu de l'éolienne est la pèce rotative en haut de mat qui reçoit les pales.</i><br><br>
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
                                    <span class="error help-block">De 0 à 20m/s</span>
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
                                           data-content="Entrer la vitesse de démarrage de l'éolienne (entre 0 et 20 m/s).<br><br>
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
      <!----------------------------------------------------------------------Power curve------------------------------------------------------------->
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <b>Courbe de puissance</b>
                                        <a href="#pop" class="pop pull-right" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto" style="margin-top: 1px"
                                           data-content="<i>La vitesse du vent varie en permanence. Pour prévoir la production d'énergie d'une éolienne il faut connaître la vitesse du vent et sa fréquence associée.</i>"
                                           title="<b>AIDE : Courbe de puissance</b>">
                                            <span class="glyphicon glyphicon-question-sign"></span>
                                        </a>
                                    </div>

                                    <div class="panel-body">

                                        <br/>
                                        <div id="displayWindTable">
                                            <table id="powerTable" class="table table-striped table-condensed center-block">

                                                <tr>
                                                    <th>Vitesse [m.s<sup>-1</sup>]</th>
                                                    <th>Puissance [kW] &nbsp;</th>
                                                    <th>&nbsp;<span class="glyphicon glyphicon-remove form-control-feedback error"></span><span class="glyphicon glyphicon-ok form-control-feedback good"></span></th>
                                                </tr>
                                                
                                                <tr>
                                                    <td><input id="windSpeed0" type="text" class="form-control input-sm"/></td>
                                                    <td><input id="power0" type="text" class="form-control input-sm"/></td>
                                                    <td></td>
                                                </tr>

                                            </table>
                                            <span class="error help-block">Les puissances saisies doivent être comprises entre 0kW et la puissance nominale. Les vitesses saisies doivent être comprises entre 0 et 50 m/s</span>
                                            <span class="good help-block"></span>
                                            <br><br>
                                            <span class="pull-right btn btn-default" onclick="addRow()">Ajouter une ligne</span>
                                            
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


<!-------------------------------------------------------------------------JavaScript------------------------------------------------------------->

<script type="text/javascript">
var index =0;
//adding a row within power table
function addRow(){
    index++;
    $('#powerTable').append('<tr><td><input id="windSpeed'+index+'" type="text" class="form-control input-sm"/></td><td><input id="power'+index+'" type="text" class="form-control input-sm"/></td><td><div class="cross"><a href="#cross" class="cross" onclick="removeRow()"><span class="glyphicon glyphicon-remove"></span></a></div></td></tr>');
    $('#nbPowerLines').val(index);
}

//remove a row within power table
function removeRow(){
    $('#powerTable').on('click', '.cross', function() {var $this = $(this); $this.closest('tr').remove(); } );
    index--;
    $('#nbPowerLines').val(index);
}

//generation of feedback icons for each input
$(function () {
        $('#turbManufacturer').keyup(function() {
        $('#divTurbineManufacturer').addClass('has-feedback');
        $('#turbManufacturer').val().length > 0 && $('#turbManufacturer').val().length <=20 ? $('#divTurbineManufacturer').addClass('has-success').removeClass('has-error') && $('#divTurbineManufacturer').find('.good').show() && $('#divTurbineManufacturer').find('.error').hide() : $('#divTurbineManufacturer').addClass('has-error').removeClass('has-success') && $('#divTurbineManufacturer').find('.error').show() && $('#divTurbineManufacturer').find('.good').hide();       
        });
        
        $('#turbName').keyup(function() {
        $('#divTurbName').addClass('has-feedback');
        $('#turbName').val().length > 0 && $('#turbName').val().length <=30 ? $('#divTurbName').addClass('has-success').removeClass('has-error') && $('#divTurbName').find('.good').show() && $('#divTurbName').find('.error').hide() : $('#divTurbName').addClass('has-error').removeClass('has-success') && $('#divTurbName').find('.error').show() && $('#divTurbName').find('.good').hide();       
        });
        
        $('#nbBlade').keyup(function() {
        $('#divNbBlade').addClass('has-feedback');
        $('#nbBlade').val() > 0 && $('#nbBlade').val() <=50 && parseFloat($('#nbBlade').val()) === parseInt($('#nbBlade').val()) && $('#nbBlade').val() !== '' ? $('#divNbBlade').addClass('has-success').removeClass('has-error') && $('#divNbBlade').find('.good').show() && $('#divNbBlade').find('.error').hide() : $('#divNbBlade').addClass('has-error').removeClass('has-success') && $('#divNbBlade').find('.error').show() && $('#divNbBlade').find('.good').hide();       
        });
        
        $('#nominalPower').keyup(function() {
        $('#divNominalPower').addClass('has-feedback');
        $('#nominalPower').val() > 0 && $('#nominalPower').val() <=10000 && $('#nominalPower').val() !== '' ? $('#divNominalPower').addClass('has-success').removeClass('has-error') && $('#divNominalPower').find('.good').show() && $('#divNominalPower').find('.error').hide() : $('#divNominalPower').addClass('has-error').removeClass('has-success') && $('#divNominalPower').find('.error').show() && $('#divNominalPower').find('.good').hide();       
        });
        
        $('#diameter').keyup(function() {
        $('#divDiameter').addClass('has-feedback');
        $('#diameter').val() > 0 && $('#diameter').val() <=500 && $('#diameter').val() !== '' ? $('#divDiameter').addClass('has-success').removeClass('has-error') && $('#divDiameter').find('.good').show() && $('#divDiameter').find('.error').hide() : $('#divDiameter').addClass('has-error').removeClass('has-success') && $('#divDiameter').find('.error').show() && $('#divDiameter').find('.good').hide();       
        });
        
        $('#height').keyup(function() {
        $('#divHeight').addClass('has-feedback');
        $('#height').val() > 0 && $('#height').val() <=300 && $('#height').val() !== '' ? $('#divHeight').addClass('has-success').removeClass('has-error') && $('#divHeight').find('.good').show() && $('#divHeight').find('.error').hide() : $('#divHeight').addClass('has-error').removeClass('has-success') && $('#divHeight').find('.error').show() && $('#divHeight').find('.good').hide();       
        });
        
        $('#cut-inSpeed').keyup(function() {
        $('#divCutInSpeed').addClass('has-feedback');
        $('#cut-inSpeed').val() > 0 && $('#cut-inSpeed').val() <=20 && $('#cut-inSpeed').val() !== '' ? $('#divCutInSpeed').addClass('has-success').removeClass('has-error') && $('#divCutInSpeed').find('.good').show() && $('#divCutInSpeed').find('.error').hide() : $('#divCutInSpeed').addClass('has-error').removeClass('has-success') && $('#divCutInSpeed').find('.error').show() && $('#divCutInSpeed').find('.good').hide();       
        });
        
        $('#cut-outSpeed').keyup(function() {
        $('#divCutOutSpeed').addClass('has-feedback');
        $('#cut-outSpeed').val() >= 10 && $('#cut-outSpeed').val() <=40 && $('#cut-outSpeed').val() !== '' ? $('#divCutOutSpeed').addClass('has-success').removeClass('has-error') && $('#divCutOutSpeed').find('.good').show() && $('#divCutOutSpeed').find('.error').hide() : $('#divCutOutSpeed').addClass('has-error').removeClass('has-success') && $('#divCutOutSpeed').find('.error').show() && $('#divCutOutSpeed').find('.good').hide();       
        });
        
        $('form').on('keyup', "input[id*='windSpeed']", function() {
        $('#displayWindTable').addClass('has-feedback');
            for(var j=0;j <= index;j++){
                if($('#power'+j+'').val() >= 0 && $('#power'+j+'').val() <= parseInt($('#nominalPower').val()) && $('#power'+j+'').val() !== '' && $('#windSpeed'+j+'').val() >= 0 && $('#windSpeed'+j+'').val() <= 50 && $('#windSpeed'+j+'').val() !== ''){
                    $('#displayWindTable').addClass('has-success').removeClass('has-error') && $('#displayWindTable').find('.good').show() && $('#displayWindTable').find('.error').hide();
                }
                else {
                    $('#displayWindTable').addClass('has-error').removeClass('has-success') && $('#displayWindTable').find('.error').show() && $('#displayWindTable').find('.good').hide();
                    break;
                }
            }
        });
        
        $('form').on('keyup', "input[id*='power']", function() {
        $('#displayWindTable').addClass('has-feedback');
            for(var j=0;j <= index;j++){
                if($('#power'+j+'').val() >= 0 && $('#power'+j+'').val() <= parseInt($('#nominalPower').val()) && $('#power'+j+'').val() !== '' && $('#windSpeed'+j+'').val() >= 0 && $('#windSpeed'+j+'').val() <= 50 && $('#windSpeed'+j+'').val() !== ''){
                    $('#displayWindTable').addClass('has-success').removeClass('has-error') && $('#displayWindTable').find('.good').show() && $('#displayWindTable').find('.error').hide();
                }
                else {
                    $('#displayWindTable').addClass('has-error').removeClass('has-success') && $('#displayWindTable').find('.error').show() && $('#displayWindTable').find('.good').hide();
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