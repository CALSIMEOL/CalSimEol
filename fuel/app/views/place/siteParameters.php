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
                                </div>
                                <div id="divSiteName2" class="input-group col-md-7">
                                    <input id="siteName" type="text" class="form-control"/>
                                    <div id="error">
                                        <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                        <span class="help-block">1 à 20 caractères</span>
                                    </div>
                                    <div id="good">
                                        <span class="glyphicon glyphicon-ok form-control-feedback"></span>
                                        <span class="help-block">Saisie correcte</span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="latitude" class="control-label">Latitude : </label>
                                </div>
                                <div class="input-group col-md-7">
                                    <input id="latitude" type="text" class="form-control" placeholder="49,5000"/>
                                    <span class="input-group-addon">°</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="longitude" class="control-label">Longitude : </label>
                                </div>
                                <div class="input-group col-md-7">
                                    <input id="longitude" type="text" class="form-control" placeholder="123,5000"/>
                                    <span class="input-group-addon">°</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-4">
                                    <label for="altitude" class="control-label">Altitude : </label>
                                </div>
                                <div class="input-group col-md-7">
                                    <input id="altitude" type="text" class="form-control" placeholder="1000"/>
                                    <span class="input-group-addon">m</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-7">
                                    <label for="averageannualtemp" class="control-label">Température moyenne annuelle :</label>
                                </div>
                                <div class="input-group col-lg-4">
                                    <input id="averageannualtemp" type="text" class="form-control" placeholder="15,00"/>
                                    <span class="input-group-addon">°C</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-7">
                                    <label class="control-label">Masse volumique de l'air : </label>
                                </div>
                                <div class="input-group col-lg-4">
                                    <input type="text" class="form-control" disabled="true"/>
                                    <span class="input-group-addon">kg.m<sup>-3</sup></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-7">
                                    <label for="roughnesslength" class="control-label">Longueur de rugosité :</label>
                                </div>
                                <div class="input-group col-lg-4">
                                    <input id="roughnesslength" type="text" class="form-control" placeholder="15,00"/>
                                    <span class="input-group-addon">m</span>
                                </div>
                            </div>
                          
                      </div>
                  <!-------------------------------------------------------------------------------------------------------------------->


                  <!------------------------------------------------wind rose----------------------------------------------------------->
                  <div>
                    <div class="col-sm-12 -marginLR">
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
                                            <div class="form-group">
                                                <div class="col-lg-7">
                                                    <label for="ElevationOfTheMeasurement" class="control-label">Altitude de la prise de mesure : </label>
                                                </div>
                                                <div class="input-group col-lg-4">
                                                    <input id="ElevationOfTheMeasurement" type="text" class="form-control"/>
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
                                                        <td><input type="text" class="form-control input-sm"/></td>
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
                               <!------------------------------------------------------------------------------->

                               <!-------------------------------- Option 2 ------------------------------------->
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <input type="radio" name="choiceOption" id="opt2" value="opt2" onclick="intoxicateOption()">
                                                </div>
                                                <div id="option2" class="col-xs-11 panel panel-default">
                                                    <br>
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
                               <!------------------------------------------------------------------------------->
                                            
                               <!-------------------------------- Option 3 ------------------------------------->
                                            <div class="row">
                                                <div class="col-xs-1">
                                                    <input type="radio" name="choiceOption" id="opt3" value="opt3" onclick="intoxicateOption()">
                                                </div>
                                                <div id="option3" class="col-xs-11 panel panel-default">
                                                    <br>
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
        $('#windTable').append('<tr><td align=center>'+windSpeed+'</td><td><input type="text" class="form-control input-sm"/></td></tr>');
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
        $('#siteName').val().length > 0 && $('#siteName').val().length <=20 ? $('#divSiteName').addClass('has-success').removeClass('has-error') : $('#divSiteName').addClass('has-error').removeClass('has-success');
        $('#siteName').val().length > 0 && $('#siteName').val().length <=20 ? $('#divSiteName2').next('#good').css("display:inline") : $('#divSiteName2').next('#error').css("display:inline");
        $('#siteName').val().length > 0 && $('#siteName').val().length <=20 ? $('#divSiteName2').next('#error').hide() : $('#divSiteName2').next('#good').hide();
        
        });
});

</script>