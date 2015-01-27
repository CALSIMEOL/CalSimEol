<!-- List wind turbine -->

<div class="row">
    <div class="clearness col-sm-12">

        <div class="row">
            <div class="lead col-sm-4">
                <h1>Liste des éoliennes</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">


      <!----------------------------------------------------------------Wind turbine list------------------------------------------------------------------>
                            <table class="table table-striped">
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
                                            <td><?php echo $turbine['turbine_name'] ?></td>
                                            <td><?php echo $turbine['turbine_manufacturer'] ?></td>
                                            <td><?php echo $turbine['turbine_power'] ?></td>
                                            <td><?php echo $turbine['turbine_blades'] ?></td>
                                            <td><?php echo $turbine['turbine_diameter'] ?></td>
                                            <td><?php echo $turbine['turbine_height'] ?></td>
                                            <td><?php echo $turbine['turbine_start_speed'] ?></td>
                                            <td><?php echo $turbine['turbine_stop_speed'] ?></td>
                                            <td>
                            <a href="<?php echo Uri::create('turbine/edit/:id', array('id' => $turbine['turbine_id'])) ?>" class="btn btn-xs btn-warning" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="<?php echo Uri::create('turbine/delete/:id', array('id' => $turbine['turbine_id'])) ?>" class="btn btn-xs btn-danger" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                                            </td>
                                    </tr>
<?php endforeach ?>
                            </table>
      <!--------------------------------------------------------------------------------------------------------------------------------------------------->
            </div>
        </div>

      <!-----------------------------------------------------------turbine list navigation bar------------------------------------------------------------->
        <div class="row">
                <div class="col-sm-offset-1 col-sm-4">
                        <a href="<?php echo Uri::create('turbine/add') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> &nbsp; Ajouter</a>
                </div>
                <div class="col-sm-4">
<?php echo $pagination ?>
                </div>
        </div>
      <!--------------------------------------------------------------------------------------------------------------------------------------------------->
      
    </div>
</div>