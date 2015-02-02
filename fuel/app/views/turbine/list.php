<!-- List wind turbine -->

<div class="row">
    <div class="clearness col-sm-12">

        <div class="row">
            <div class="lead col-sm-4">
                <h1>Liste des éoliennes</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-offset-1 col-sm-5">
                <form class="form-group" role="search">
                    <label for="nameTurbine" class="control-label">Rechercher une éolienne : </label>
                    <div class="input-group">
                            <input id="nameTurbine" class="form-control" type="text" name="search" placeholder="Saisir un critère souhaité"/>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">Go!</button>
                            </span>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
    

      <!----------------------------------------------------------------Wind turbine list------------------------------------------------------------------>
                            <table class="table table-striped table-responsive">
                                    <tr>
                                            <th>#</th>
                                            <th>Nom</th>
                                            <th>Constructeur</th>
                                            <th>P. Nom.</th>
                                            <th>Pales</th>
                                            <th>Diamètre</th>
                                            <th>H. Moyeu</th>
                                            <th>V. Démarrage</th>
                                            <th>V. Arrêt</th>
                                            <th>Actions</th>
                                    </tr>
<?php foreach ($turbines as $turbine) : ?>
                                    <tr>
                                            <td><?php echo $turbine['turbine_id'] ?></td>
                                            <td><b><?php echo $turbine['turbine_name'] ?></b></td>
                                            <td><b><?php echo $turbine['turbine_manufacturer'] ?></b></td>
                                            <td><?php echo $turbine['turbine_power'].' kW' ?></td>
                                            <td><?php echo $turbine['turbine_blades'] ?></td>
                                            <td><?php echo $turbine['turbine_diameter'].' m' ?></td>
                                            <td><?php echo $turbine['turbine_height'].' m' ?></td>
                                            <td><?php echo $turbine['turbine_start_speed'].'m/s' ?></td>
                                            <td><?php echo $turbine['turbine_stop_speed'].'m/s' ?></td>
                                            <td>
                            <a href="<?php echo Uri::create('turbine/edit/:id', array('id' => $turbine['turbine_id'])) ?>" class="btn btn-xs btn-warning<?php if ($turbine->turbine_verified) echo ' disabled' ?>" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="<?php echo Uri::create('turbine/delete/:id', array('id' => $turbine['turbine_id'])) ?>" class="btn btn-xs btn-danger<?php if ($turbine->turbine_verified) echo ' disabled' ?>" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                            </td>
                                    </tr>
<?php endforeach ?>
                            </table>
      <!--------------------------------------------------------------------------------------------------------------------------------------------------->
            </div>
        </div>

      <!-----------------------------------------------------------turbine list navigation bar------------------------------------------------------------->
        <div class="row">
                <div class="col-sm-offset-1 col-sm-4"><br>
                        <a href="<?php echo Uri::create('turbine/add') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; Ajouter</a>
                </div>
                <div class="col-sm-4">
<?php echo $pagination ?>
                </div>
        </div>
      <!--------------------------------------------------------------------------------------------------------------------------------------------------->
      
    </div>
</div>
