<!-- Simulation - Site parameters - manual -->

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

                        <div class="form-group">
                            <legend>Paramétrage de l'éolienne</legend>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
      <!----------------------------------------------------------------------Wind turbine parameters------------------------------------------------------------>

                      <div>

                            <div id="divTurbineName" class="form-group">
                                <div class="col-md-4">
                                    <label for="turbName" class="control-label">Nom : </label>
                                    <br>
                                    <span class="error help-block">1 à 40 caractères</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="input-group col-md-8">
                                    <input id="turbName" type="text" name="turbine_name" value="<?php echo $turbine['turbine_name'] ?>" class="form-control"/>
                                    <span class="glyphicon glyphicon-remove form-control-feedback error"></span>
                                    <span class="glyphicon glyphicon-ok form-control-feedback good"></span>
                                </div>
                            </div>

                            <div id="divNbBlade" class="form-group">
                                <div class="col-md-5">
                                    <label for="nbBlade" class="control-label">Nombre de pales : </label>
                                    <br>
                                    <span class="error help-block">De 1 à 50 pales</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="input-group col-md-7">
                                    <input id="nbBlade" type="text" name="turbine_blades" value="<?php echo $turbine['turbine_blades'] ?>" class="form-control" placeholder="3"/>
                                    <span class="glyphicon glyphicon-remove form-control-feedback error"></span>
                                    <span class="glyphicon glyphicon-ok form-control-feedback good"></span>
                                </div>
                            </div>
                          
                            <div id="divNominalPower" class="form-group">
                                <div class="col-lg-5">
                                    <label for="nominalPower" class="control-label">Puissance nominale : </label>
                                    <br>
                                    <span class="error help-block">De 1 à 10000kW</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="input-group col-lg-6">
                                    <input id="nominalPower" type="text" name="turbine_power" value="<?php echo $turbine['turbine_power'] ?>" class="form-control" placeholder="1500"/>
                                    <span class="glyphicon glyphicon-remove form-control-feedback error shift4"></span>
                                    <span class="glyphicon glyphicon-ok form-control-feedback good shift4"></span>
                                    <span class="input-group-addon">kW</span>
                                </div>
                            </div>

                            <div id="divDiameter" class="form-group">
                                <div class="col-lg-5">
                                    <label for="diameter" class="control-label">Diamètre du rotor : </label>
                                    <br>
                                    <span class="error help-block">De 1 à 500m</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="input-group col-lg-6">
                                    <input id="diameter" type="text" name="turbine_diameter" value="<?php echo $turbine['turbine_diameter'] ?>" class="form-control" placeholder="40"/>
                                    <span class="glyphicon glyphicon-remove form-control-feedback error shift2"></span>
                                    <span class="glyphicon glyphicon-ok form-control-feedback good shift2"></span>
                                    <span class="input-group-addon">m</span>
                                </div>
                            </div>

                            <div id="divHeight" class="form-group">
                                <div class="col-lg-5">
                                    <label for="height" class="control-label">Hauteur du moyeu :</label>
                                    <br>
                                    <span class="error help-block">De 1 à 300m</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="input-group col-lg-6">
                                    <input id="height" type="text" name="turbine_height" value="<?php echo $turbine['turbine_height'] ?>" class="form-control" placeholder="60"/>
                                    <span class="glyphicon glyphicon-remove form-control-feedback error shift2"></span>
                                    <span class="glyphicon glyphicon-ok form-control-feedback good shift2"></span>
                                    <span class="input-group-addon">m</span>
                                </div>
                            </div>

                            <div id="divCutInSpeed" class="form-group">
                                <div class="col-lg-5">
                                    <label for="cut-inSpeed" class="control-label">Vitesse de démarrage : </label>
                                    <span class="error help-block">De 0 à 20m/s</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="input-group col-lg-6">
                                    <input id="cut-inSpeed" type="text" name="turbine_start_speed" value="<?php echo $turbine['turbine_start_speed'] ?>" class="form-control" placeholder="3,0"/>
                                    <span class="glyphicon glyphicon-remove form-control-feedback error shift5"></span>
                                    <span class="glyphicon glyphicon-ok form-control-feedback good shift5"></span>
                                    <span class="input-group-addon">m/s</span>
                                </div>
                            </div>

                            <div id="divCutOutSpeed" class="form-group">
                                <div class="col-lg-5">
                                    <label for="cut-outSpeed" class="control-label">Vitesse de coupure : </label>
                                    <span class="error help-block">De 10 à 40m/s</span>
                                    <span class="good help-block"></span>
                                </div>
                                <div class="input-group col-lg-6">
                                    <input id="cut-outSpeed" type="text" name="turbine_stop_speed" value="<?php echo $turbine['turbine_stop_speed'] ?>" class="form-control" placeholder="25"/>
                                    <span class="glyphicon glyphicon-remove form-control-feedback error shift5"></span>
                                    <span class="glyphicon glyphicon-ok form-control-feedback good shift5"></span>
                                    <span class="input-group-addon">m/s</span>
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
}

//remove a row within power table
function removeRow(){
    $('#powerTable').on('click', '.cross', function() {var $this = $(this); $this.closest('tr').remove(); } );
    index--;
}

//generation of feedback icons for each input
$(function () {
        $('#turbName').keyup(function() {
        $('#divTurbineName').addClass('has-feedback');
        $('#turbName').val().length > 0 && $('#turbName').val().length <=20 ? $('#divTurbineName').addClass('has-success').removeClass('has-error') && $('#divTurbineName').find('.good').show() && $('#divTurbineName').find('.error').hide() : $('#divTurbineName').addClass('has-error').removeClass('has-success') && $('#divTurbineName').find('.error').show() && $('#divTurbineName').find('.good').hide();       
        });
        
        $('#nbBlade').keyup(function() {
        $('#divNbBlade').addClass('has-feedback');
        $('#nbBlade').val() > 0 && $('#nbBlade').val() <=50 && $('#nbBlade').val() !== '' ? $('#divNbBlade').addClass('has-success').removeClass('has-error') && $('#divNbBlade').find('.good').show() && $('#divNbBlade').find('.error').hide() : $('#divNbBlade').addClass('has-error').removeClass('has-success') && $('#divNbBlade').find('.error').show() && $('#divNbBlade').find('.good').hide();       
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

</script>