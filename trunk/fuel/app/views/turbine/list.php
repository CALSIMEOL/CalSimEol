<!-- Simulation - list wind turbine -->

<div class="row">
    <div class="clearness col-sm-12">

        <div class="row">
            <div class="lead col-sm-3">
                <h1>Simulation</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">

                <div class="form-group">
                    <legend>Liste d'éoliennes</legend>
                </div>
                <br>

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
                        <a href="<?php echo Uri::create('turbine/form') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter</a>
                </div>
                <div class="col-sm-4">
                                <ul class="pagination">
                </div>
        </div>
      <!--------------------------------------------------------------------------------------------------------------------------------------------------->
      
    </div>
</div>