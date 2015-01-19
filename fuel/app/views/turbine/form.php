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
                            <legend>Paramétrage de l'éolienne</legend>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
      <!----------------------------------------------------------------------Wind turbine parameters------------------------------------------------------------>

                      <div>

                            <div class="form-group">
                                <div class="col-md-3">
                                    <label for="turbName" class="control-label">Nom : </label>
                                </div>
                                <div class="input-group col-md-8">
                                    <input id="turbName" type="text" class="form-control"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-5">
                                    <label for="nbBlade" class="control-label">Nombre de pales : </label>
                                </div>
                                <div class="input-group col-md-6">
                                    <input id="nbBlade" type="text" class="form-control" placeholder="3"/>
                                </div>
                            </div>
                          
                            <div class="form-group">
                                <div class="col-lg-5">
                                    <label for="nominalPower" class="control-label">Puissance nominale : </label>
                                </div>
                                <div class="input-group col-lg-6">
                                    <input id="nominalPower" type="text" class="form-control" placeholder="1500"/>
                                    <span class="input-group-addon">kW</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-5">
                                    <label for="diameter" class="control-label">Diamètre du rotor : </label>
                                </div>
                                <div class="input-group col-lg-6">
                                    <input id="diameter" type="text" class="form-control" placeholder="40"/>
                                    <span class="input-group-addon">m</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-5">
                                    <label for="height" class="control-label">Hauteur du moyeu :</label>
                                </div>
                                <div class="input-group col-lg-6">
                                    <input id="height" type="text" class="form-control" placeholder="60"/>
                                    <span class="input-group-addon">m</span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-5">
                                    <label for="cut-inSpeed" class="control-label">Vitesse de démarrage : </label>
                                </div>
                                <div class="input-group col-lg-6">
                                    <input id="cut-inSpeed" type="text" class="form-control" placeholder="3,0"/>
                                    <span class="input-group-addon">m.s<sup>-1</sup></span>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-lg-5">
                                    <label for="cut-outSpeed" class="control-label">Vitesse de coupure : </label>
                                </div>
                                <div class="input-group col-lg-6">
                                    <input id="cut-outSpeed" type="text" class="form-control" placeholder="25"/>
                                    <span class="input-group-addon">m.s<sup>-1</sup></span>
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
                                                    <th>Puissance [kW]</th>
                                                    <th></th>
                                                </tr>
                                                
                                                <tr>
                                                    <td><input type="text" class="form-control input-sm"/></td>
                                                    <td><input type="text" class="form-control input-sm"/></td>
                                                    <td></td>
                                                </tr>

                                            </table>

                                            <span class="pull-right btn btn-default" onclick="addRow()">Ajouter une ligne</span>
                                            
                                        </div>

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

//adding a row within wind table
function addRow(){
    $('#powerTable').append('<tr><td><input type="text" class="form-control input-sm"/></td><td><input type="text" class="form-control input-sm"/></td><td><div class="cross"><a href="#cross" class="cross" onclick="removeRow()"><span class="glyphicon glyphicon-remove"></span></a></div></td></tr>');
}

function removeRow(){
    $('#powerTable').on('click', '.cross', function() {var $this = $(this); $this.closest('tr').remove(); } );
}

</script>