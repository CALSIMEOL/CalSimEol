<!-- Simulation - Site parameters - manual -->

    <div class="row">
        <div class="clearness col-sm-12">

            <div class="row">
                <div class="lead col-sm-3">
                    <h1>Simulation</h1>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-offset-1 col-sm-10">
                    <form class="form-horizontal marginLR" method="post">

                        <div class="form-group">
                            <legend>Paramétrage du site</legend>
                        </div>

                        <div class="row">
      <!----------------------------------------------------------------------Site parameters and wind rose------------------------------------------------------------>
                            <div class="col-sm-6">

                  <!---------------------------------------------Site parameters-------------------------------------------------------->
                      <div>

                            <div id="divSiteName" class="form-group">
                                <div class="col-md-4">
                                    <label for="siteName" class="control-label">Nom : </label>
                                    <br>
                                    <span class="error help-block">1 à 20 caractères</span>
                                    <span class="good help-block">Saisie correcte</span> 
                                </div>
                                <div class="col-xs-7 -marginLR">
                                    <div class="input-group">
                                        <input id="siteName" type="text" class="form-control"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback error"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback good"></span>                        
                                    </div>
                                </div>
                                <div class="col-xs-1">
                                    <div class="pop">
                                    <a href="#pop" class="pop" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="Entrer un nom pour ce site entre 1 et 20 caractères." title="AIDE : nom du site">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                    </div>
                                </div>
                            </div>

                            <div id="divLatitude" class="form-group">
                                <div class="col-md-4">
                                    <label for="latitude" class="control-label">Latitude : </label>
                                    <br>
                                    <span class="error help-block">Compris entre -90 et 90°</span>
                                    <span class="good help-block">Saisie correcte</span>
                                </div>
                                <div class="col-xs-7 -marginLR">
                                    <div class="input-group">
                                        <input id="latitude" type="text" class="form-control" placeholder="49.50"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback shift error"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback shift good"></span>
                                        <span class="input-group-addon">°</span>
                                    </div>
                               </div>
                                <div class="col-xs-1">
                                    <div class="pop">
                                        <a href="#pop" class="pop" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="Entrer la latitude comprise entre -90° et 90°." title="AIDE : Latitude du site">
                                            <span class="glyphicon glyphicon-question-sign"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                          
                            <div id="divLongitude" class="form-group">
                                <div class="col-md-4">
                                    <label for="longitude" class="control-label">Longitude : </label>
                                    <br>
                                    <span class="error help-block">Compris entre -180 et 180°</span>
                                    <span class="good help-block">Saisie correcte</span>
                                </div>
                                <div class="col-xs-7 -marginLR">
                                    <div class="input-group">
                                        <input id="longitude" type="text" class="form-control" placeholder="123,5000"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback shift error"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback shift good"></span>
                                        <span class="input-group-addon">°</span>
                                    </div>
                                </div>
                                
                                <div class="col-xs-1">
                                    <div class="pop">
                                        <a href="#pop" class="pop" data-toggle="popover" data-trigger="focus" data-placement="top" data-content="Entrer la longitude comprise entre -180° et 180°." title="AIDE : Longitude du site">
                                            <span class="glyphicon glyphicon-question-sign"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>

                            <div id="divAltitude" class="form-group">
                                <div class="col-md-4">
                                    <label for="altitude" class="control-label">Altitude : </label>
                                    <br>
                                    <span class="error help-block">Compris entre -500 et 3000 mètres</span>
                                    <span class="good help-block">Saisie correcte</span>
                                </div>
                                <div class="col-md-7">
                                    <div class="input-group">
                                        <input id="altitude" type="text" class="form-control" placeholder="1000"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback shift2 error"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback shift2 good"></span>
                                        <span class="input-group-addon">m</span>
                                    </div>
                                </div>   
                            </div>

                            <div id="divTemp" class="form-group">
                                <div class="col-lg-7">
                                    <label for="averageannualtemp" class="control-label">Température moyenne annuelle :</label>
                                    <br>
                                    <span class="error help-block">Compris entre -50 et 50°C</span>
                                    <span class="good help-block">Saisie correcte</span>
                                </div>
                                 <div class="col-lg-4">
                                    <div class="input-group">
                                        <input id="averageannualtemp" type="text" class="form-control" placeholder="15,00"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback shift3 error"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback shift3 good"></span>
                                        <span class="input-group-addon">°C</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-7">
                                    <label class="control-label">Masse volumique de l'air : </label>
                                </div>
                                <div class="col-lg-4">
                                    <div class="input-group">
                                        <input id="density" type="text" class="form-control" disabled="true"/>
                                        <span class="input-group-addon">kg.m<sup>-3</sup></span>
                                    </div>
                                </div>
                            </div>

                            <div id="divRoughness" class="form-group">
                                <div class="col-lg-7">
                                    <label for="roughnesslength" class="control-label">Longueur de rugosité :</label>
                                    <br>
                                    <span class="error help-block">Compris entre 0 et 2 mètres</span>
                                    <span class="good help-block">Saisie correcte</span>
                                </div>
                                <div class="col-lg-4">
                                    <div class="input-group">
                                        <input id="roughnesslength" type="text" class="form-control" placeholder="15,00"/>
                                        <span class="glyphicon glyphicon-remove form-control-feedback shift2 error"></span>
                                        <span class="glyphicon glyphicon-ok form-control-feedback shift2 good"></span>
                                        <span class="input-group-addon">m</span>
                                    </div>     
                               </div>
                            </div>
                          
                      </div>
                  <!-------------------------------------------------------------------------------------------------------------------->


                  <!------------------------------------------------wind rose----------------------------------------------------------->
                    <div class="col-sm-11">
                        <div class="panel panel-default">

                            <div class="panel-heading">
                                <b>Rose des vents</b><br>(n'intervient pas dans le dimensionnement)
                            </div>

                            <div class="panel-body">

                                <div class="form-inline">

                                    <div class="col-xs-6">
                                        <div class="radio">
                                            <label for="unknown" class="radio">
                                            <input type="radio" name="roseSources" value="unknown" id="unknown" checked="" onclick="windRose()"> Non connue </label>
                                        </div>
                                    </div>

                                    <div class="col-xs-6">
                                        <div class="radio">
                                            <label for="known" class="radio">
                                            <input type="radio" name="roseSources" value="known" id="known" onclick="windRose()"> Connue </label>
                                        </div>
                                    </div>

                                </div>

                                <br/> <br/> <br/>
                                <div id="knowRose">
                                    La rose des vents ne sera affichée qu'à titre indicatif.
                                    <table class="table table-striped table-condensed">

                                          <tr>
                                              <th width=22%>Direction</th>
                                              <th>Heure / an</th>
                                              <th>Vitesse moyenne</th>
                                          </tr>

                                          <tr><td>Nord</td><td><input type="text" class="form-control input-sm"/></td><td><input type="text" class="form-control input-sm"/></td></tr>
                                          <tr><td>Nord-ouest</td><td><input type="text" class="form-control input-sm"/></td><td><input type="text" class="form-control input-sm"/></td></tr>
                                          <tr><td>Ouest</td><td><input type="text" class="form-control input-sm"/></td><td><input type="text" class="form-control input-sm"/></td></tr>
                                          <tr><td>Sud-ouest</td><td><input type="text" class="form-control input-sm"/></td><td><input type="text" class="form-control input-sm"/></td></tr>
                                          <tr><td>Sud</td><td><input type="text" class="form-control input-sm"/></td><td><input type="text" class="form-control input-sm"/></td></tr>
                                          <tr><td>Sud-est</td><td><input type="text" class="form-control input-sm"/></td><td><input type="text" class="form-control input-sm"/></td></tr>
                                          <tr><td>Est</td><td><input type="text" class="form-control input-sm"/></td><td><input type="text" class="form-control input-sm"/></td></tr>
                                          <tr><td>Nord-est</td><td><input type="text" class="form-control input-sm"/></td><td><input type="text" class="form-control input-sm"/></td></tr>

                                    </table>
                                </div>

                                <div id="unknowRose" class="marginLR">
                                    
                                    La rose des vents ne sera pas affichée dans les résultats finaux.
                                </div>

                            </div>
                        </div>
                    </div>
                  <!-------------------------------------------------------------------------------------------------------------------->                  
                            </div>
      <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->                          


                            <div class="col-sm-6">
      <!----------------------------------------------------------------------Wind distribution------------------------------------------------------------->
                                <div class="panel panel-default">

                                    <div class="panel-heading">
                                        <b>Distribution des vents</b>
                                    </div>

                                    <div class="panel-body">

                                        <div class="form-inline">

                                            <div class="col-xs-6">
                                                <div class="radio">
                                                    <label for="simple" class="radio">
                                                    <input type="radio" name="distribSources" value="simple" id="simple" checked="" onclick="windDistribution()"> Simple </label>
                                                </div>
                                            </div>

                                            <div class="col-xs-6">
                                                <div class="radio">
                                                    <label for="detailed" class="radio">
                                                    <input type="radio" name="distribSources" value="detailed" id="detailed" onclick="windDistribution()"> Détaillé </label>
                                                </div>
                                            </div>
                                            <br> <br> <br>
                                            <div id="divElevation">
                                                <div class="col-lg-8">
                                                    <label for="ElevationOfTheMeasurement" class="control-label">Altitude de la prise de mesure : </label>
                                                    <br>
                                                    <span class="error help-block">Compris entre -500 et 3000 mètres</span>
                                                    <span class="good help-block">Saisie correcte</span>
                                                </div>
                                                    <div class="input-group col-lg-4">
                                                        <input id="ElevationOfTheMeasurement" type="text" class="form-control"/>
                                                        <span class="glyphicon glyphicon-remove form-control-feedback shift2 error"></span>
                                                        <span class="glyphicon glyphicon-ok form-control-feedback shift2 good"></span>
                                                        <span class="input-group-addon">m</span>
                                                    </div>  
                                            </div>
                                        </div>
                    <!-------------------------------------------- Wind distribution - detailed ------------------------------------------>
                                        <br>
                                        <div id="displayWindTable">
                                            
                                            <div  class="col-sm-offset-1 col-sm-10">
                                                <table id="windTable" class="table table-responsive table-striped table-condensed center-block">

                                                    <tr>
                                                        <th>Vitesse [m.s<sup>-1</sup>]</th>
                                                        <th>Heure / an</th>
                                                    </tr>

                                                    <tr>
                                                        <td align=center>0</td>
                                                        <td><input type="text" class="form-control input-sm windProbability"/><span class="glyphicon glyphicon-remove form-control-feedback error"></span><span class="glyphicon glyphicon-ok form-control-feedback good"></span></td>
                                                    </tr>

                                                </table>
                                                <div class="pull-right">
                                                    <span class="btn btn-info btn-xs" onclick="addRow()"><span class="glyphicon glyphicon-plus"></span> Ajouter une ligne</span>
                                                    <span class="btn btn-danger btn-xs" onclick="deleteRow()"><span class="glyphicon glyphicon-trash"></span> Supprimer une ligne</span>
                                                </div>
                                            </div>
                                            
                                        </div>
                    <!---------------------------------------------------------------------------------------------------------------------->
                                        
                    <!-------------------------------------------- Wind distribution - simple ------------------------------------------>
                                        <div id="windsimple" class="marginLR">

                               <!-------------------------------- Option 1 ------------------------------------->
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <input type="radio" name="choiceOption" id="opt1" value="opt1" checked="" onclick="intoxicateOption()">
                                                </div>
                                                <div id="option1" class="col-xs-11 panel panel-default">
                                                    <br>
                                                    <div class="marginLR">
                                                        <div class="form-group">
                                                            <div class="col-lg-7">
                                                                <label for="averageWindSpeed1" class="control-label">Vitesse moyenne vent : </label>
                                                            </div>
                                                            <div class="input-group col-lg-5">
                                                                <input id="averageWindSpeed1" type="text" class="form-control"/>
                                                                <span class="input-group-addon">m.s<sup>-1</sup></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-7">
                                                                <label for="shape1" class="control-label">Facteur de forme k :</label>
                                                            </div>
                                                            <div class="input-group col-lg-5">
                                                                <input id="shape1" type="text" class="form-control" placeholder="15,00"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                               <!------------------------------------------------------------------------------->

                               <!-------------------------------- Option 2 ------------------------------------->
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <input type="radio" name="choiceOption" id="opt2" value="opt2" onclick="intoxicateOption()">
                                                </div>
                                                <div id="option2" class="col-xs-11 panel panel-default">
                                                    <br>
                                                    <div class="marginLR">
                                                        <div class="form-group">
                                                            <div class="col-lg-7">
                                                                <label for="averageWindSpeed2" class="control-label">Vitesse moyenne vent : </label>
                                                            </div>
                                                            <div class="input-group col-lg-5">
                                                                <input id="averageWindSpeed2" type="text" class="form-control"/>
                                                                <span class="input-group-addon">m.s<sup>-1</sup></span>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-7">
                                                                <label for="standardDeviation" class="control-label">Ecart type :</label>
                                                            </div>
                                                            <div class="input-group col-lg-5">
                                                                <input id="standardDeviation" type="text" class="form-control" placeholder="15,00"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                               <!------------------------------------------------------------------------------->
                                            
                               <!-------------------------------- Option 3 ------------------------------------->
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <input type="radio" name="choiceOption" id="opt3" value="opt3" onclick="intoxicateOption()">
                                                </div>
                                                <div id="option3" class="col-xs-11 panel panel-default">
                                                    <br>
                                                    <div class="marginLR">
                                                        <div class="form-group">
                                                            <div class="col-lg-7">
                                                                <label for="scaleFactor" class="control-label">Facteur d'échelle A : </label>
                                                            </div>
                                                            <div class="input-group col-lg-5">
                                                                <input id="scaleFactor" type="text" class="form-control"/>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <div class="col-lg-7">
                                                                <label for="shape2" class="control-label">Facteur de forme k :</label>
                                                            </div>
                                                            <div class="input-group col-lg-5">
                                                                <input id="shape2" type="text" class="form-control" placeholder="15,00"/>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                               <!------------------------------------------------------------------------------->
                                            
                                        </div>
                    <!---------------------------------------------------------------------------------------------------------------------->
                    
                                    </div>

                                </div>
      <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="pull-right btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Valider</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>



<!-------------------------------------------------------------------------JavaScript------------------------------------------------------------->

<script type="text/javascript">
    var windSpeed = 0;

//Displaying wind distribution
    function windDistribution(){
        
        $('input[type="radio"][name="distribSources"]:checked').val() === 'simple' ? $('#windsimple').css({'display': 'block'}) : $('#windsimple').css({'display': 'none'});
        $('input[type="radio"][name="distribSources"]:checked').val() === 'detailed' ? $('#displayWindTable').css({'display': 'block'}) : $('#displayWindTable').css({'display': 'none'});
    }
$(function () {
    windDistribution();
});

//Displaying wind rose
    function windRose(){
        
        $('input[type="radio"][name="roseSources"]:checked').val() === 'unknown' ? $('#unknowRose').css({'display': 'block'}) : $('#unknowRose').css({'display': 'none'});
        $('input[type="radio"][name="roseSources"]:checked').val() === 'known' ? $('#knowRose').css({'display': 'block'}) : $('#knowRose').css({'display': 'none'});
    }
    $(function () {
        windRose();
    });

//adding a row within wind table
function addRow(){
    if (windSpeed<30){
        windSpeed++;
        $('#windTable').append('<tr><td align=center>'+windSpeed+'</td><td><input type="text" class="form-control input-sm"/><span class="glyphicon glyphicon-remove form-control-feedback error"></span><span class="glyphicon glyphicon-ok form-control-feedback good"></span></td></tr>');
    }
    else{
        
    }
}

//delete a row within wind table
function deleteRow(){
if(windSpeed>0){
        $('#windTable tr:last').remove();
        windSpeed--;
    }
}

//intoxicate non selected option
function intoxicateOption(){
        $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt1' ? $('#option1').find("*").prop('disabled', false) : $('#option1').find("*").prop('disabled', true);
        $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt1' ? $('#option1').css({'opacity': '1'}) : $('#option1').css({'opacity': '0.33'});
        $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt1' ? $('#option2').find("*").val(''):null;
        $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt1' ? $('#option3').find("*").val(''):null;
        
        $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt2' ? $('#option2').find("*").prop('disabled', false) : $('#option2').find("*").prop('disabled', true);
        $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt2' ? $('#option2').css({'opacity': '1'}) : $('#option2').css({'opacity': '0.33'});
        $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt2' ? $('#option1').find("*").val(''):null;
        $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt2' ? $('#option3').find("*").val(''):null;
        
        $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt3' ? $('#option3').find("*").prop('disabled', false) : $('#option3').find("*").prop('disabled', true);
        $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt3' ? $('#option3').css({'opacity': '1'}) : $('#option3').css({'opacity': '0.33'});
        $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt3' ? $('#option1').find("*").val(''):null;
        $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt3' ? $('#option2').find("*").val(''):null;
        
    }
$(function () {
    intoxicateOption();
});

$(function () {
        $('#siteName').keyup(function() {
        $('#divSiteName').addClass('has-feedback');
        $('#siteName').val().length > 0 && $('#siteName').val().length <=20 ? $('#divSiteName').addClass('has-success').removeClass('has-error') && $('#divSiteName').find('.good').show() && $('#divSiteName').find('.error').hide() : $('#divSiteName').addClass('has-error').removeClass('has-success') && $('#divSiteName').find('.error').show() && $('#divSiteName').find('.good').hide();       
        });
        
        $('#latitude').keyup(function() {
        $('#divLatitude').addClass('has-feedback');
        $('#latitude').val() >= -90 && $('#latitude').val() <=90 && $('#latitude').val() !== '' ? $('#divLatitude').addClass('has-success').removeClass('has-error') && $('#divLatitude').find('.good').show() && $('#divLatitude').find('.error').hide()  : $('#divLatitude').addClass('has-error').removeClass('has-success') && $('#divLatitude').find('.error').show() && $('#divLatitude').find('.good').hide();     
        });
        
        $('#longitude').keyup(function() {
        $('#divLongitude').addClass('has-feedback');
        $('#longitude').val() >= -180 && $('#longitude').val() <=180 && $('#longitude').val() !== '' ? $('#divLongitude').addClass('has-success').removeClass('has-error') && $('#divLongitude').find('.good').show() && $('#divLongitude').find('.error').hide()  : $('#divLongitude').addClass('has-error').removeClass('has-success') && $('#divLongitude').find('.error').show() && $('#divLongitude').find('.good').hide();     
        });
        
        $('#altitude').keyup(function() {
        $('#divAltitude').addClass('has-feedback');
        $('#altitude').val() >= -500 && $('#altitude').val() <=3000 && $('#altitude').val() !== '' ? $('#divAltitude').addClass('has-success').removeClass('has-error') && $('#divAltitude').find('.good').show() && $('#divAltitude').find('.error').hide()  : $('#divAltitude').addClass('has-error').removeClass('has-success') && $('#divAltitude').find('.error').show() && $('#divAltitude').find('.good').hide();
        $('#altitude').val() >= -500 && $('#altitude').val() <=3000 && $('#altitude').val() !== '' && $('#averageannualtemp').val() >= -50 && $('#averageannualtemp').val() <=50 && $('#averageannualtemp').val() !== '' ? $('#density').val(function() {
            var altitude = $('#altitude').val(); 
            var temp = $('#averageannualtemp').val(); 
            var density; 
            density=altitude*temp; 
            return density;})
        : $('#density').val('');
        });
        
        $('#averageannualtemp').keyup(function() {
        $('#divTemp').addClass('has-feedback');
        $('#averageannualtemp').val() >= -50 && $('#averageannualtemp').val() <=50 && $('#averageannualtemp').val() !== '' ? $('#divTemp').addClass('has-success').removeClass('has-error') && $('#divTemp').find('.good').show() && $('#divTemp').find('.error').hide()  : $('#divTemp').addClass('has-error').removeClass('has-success') && $('#divTemp').find('.error').show() && $('#divTemp').find('.good').hide();
        $('#altitude').val() >= -500 && $('#altitude').val() <=3000 && $('#altitude').val() !== '' && $('#averageannualtemp').val() >= -50 && $('#averageannualtemp').val() <=50 && $('#averageannualtemp').val() !== '' ? $('#density').val(function() {
            var altitude = $('#altitude').val(); 
            var temp = $('#averageannualtemp').val(); 
            var density; 
            density=altitude*temp; 
            return density;})
        : $('#density').val('');
        });
        
        $('#roughnesslength').keyup(function() {
        $('#divRoughness').addClass('has-feedback');
        $('#roughnesslength').val() >= -50 && $('#roughnesslength').val() <=50 && $('#roughnesslength').val() !== '' ? $('#divRoughness').addClass('has-success').removeClass('has-error') && $('#divRoughness').find('.good').show() && $('#divRoughness').find('.error').hide()  : $('#divRoughness').addClass('has-error').removeClass('has-success') && $('#divRoughness').find('.error').show() && $('#divRoughness').find('.good').hide();     
        });
        
        $('#ElevationOfTheMeasurement').keyup(function() {
        $('#divElevation').addClass('has-feedback');
        $('#ElevationOfTheMeasurement').val() >= -500 && $('#ElevationOfTheMeasurement').val() <=3000 && $('#ElevationOfTheMeasurement').val() !== '' ? $('#divElevation').addClass('has-success').removeClass('has-error') && $('#divElevation').find('.good').show() && $('#divElevation').find('.error').hide()  : $('#divElevation').addClass('has-error').removeClass('has-success') && $('#divElevation').find('.error').show() && $('#divElevation').find('.good').hide();
        });
        
        $('.windProbability').keyup(function() {
            
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