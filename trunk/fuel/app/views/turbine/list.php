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
                                                    <a href="<?php echo Uri::create('turbine/modify-:id', array('id' => $turbine['turbine_id'])) ?>" class="btn btn-xs btn-warning" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                                                    <a href="<?php echo Uri::create('turbine/remove-:id', array('id' => $turbine['turbine_id'])) ?>" class="btn btn-xs btn-danger" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
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
                        <nav>
                                <ul class="pagination">
<?php if ($page_id == 1) : ?>
                                        <li class="disabled"><a href="#" aria-label="Précédent"><span aria-hidden="true">&laquo;</span></a></li>
<?php else : ?>
                                        <li><a href="<?php echo Uri::create('turbine/list-:start', array('start' => $page_id - 1)) ?>" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
<?php endif ?>
<?php for ($i = 1; $i <= $page_count; $i++) : ?>
<?php if ($i == $page_id) : ?>
                                        <li class="active"><a href="<?php echo Uri::create('turbine/list-:start', array('start' => $i)) ?>"><?php echo $i ?> <span class="sr-only">(current)</span></a></li>
<?php else : ?>
                                        <li><a href="<?php echo Uri::create('turbine/list-:start', array('start' => $i)) ?>"><?php echo $i ?></a></li>
<?php endif ?>
<?php endfor ?>
<?php if ($page_id == $page_count) : ?>
                                        <li class="disabled"><a href="#" aria-label="Suivant"><span aria-hidden="true">&raquo;</span></a></li>
<?php else : ?>
                                        <li><a href="<?php echo Uri::create('turbine/list-:start', array('start' => $page_id + 1)) ?>" aria-label="Suivant"><span aria-hidden="true">&raquo;</span></a></li>
<?php endif ?>
                                </ul>
                        </nav>
                </div>
        </div>
      <!--------------------------------------------------------------------------------------------------------------------------------------------------->
      
    </div>
</div>