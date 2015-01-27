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
                                            <th>Actions</th>
                                    </tr>
<?php foreach ($turbines as $turbine) : ?>
                                    <tr>
                                            <td><?php echo $turbine['turbine_id'] ?></td>
                                            <td><?php echo $turbine['turbine_name'] ?></td>
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