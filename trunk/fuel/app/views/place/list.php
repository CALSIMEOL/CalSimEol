<!-- List place -->

<div class="row">
    <div class="clearness col-sm-12">

        <div class="row">
            <div class="lead col-sm-4">
                <h1>Liste des sites éolien</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-offset-1 col-sm-5">
                <form class="form-group" role="search">
                    <label for="namePlace" class="control-label">Rechercher un site : </label>
                    <div class="input-group">
                            <input id="namePlace" class="form-control" type="text" name="search" placeholder="Saisir un critère souhaité"/>
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            </span>
                    </div>
                </form>
            </div>
        </div>
        
        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">

                <table class="table table-striped table-responsive">
                    <tr>
                        <th>#</th>
                        <th>Nom</th>
                        <th>Latitude</th>
                        <th>Longitude</th>
                        <th>Altitude</th>
                        <th>Temp. Moy.</th>
                        <th>Longueur de rugosité</th>
                        <th>Vent Moy.</th>
                        <th>Ecart type</th>
                        <th>A</th>
                        <th>k</th>
                        <th>Actions</th>
                    </tr>
<?php foreach ($places as $place) : ?>
                    <tr>
                        <td><?php echo $place['place_id'] ?></td>
                        <td><b><?php echo $place['place_name'] ?></b></td>
                        <td><?php echo $place['place_latitude'].' °' ?></td>
                        <td><?php echo $place['place_longitude'].' °' ?></b</td>
                        <td><?php echo $place['place_altitude'].' m' ?></td>
                        <td><?php echo $place['place_mean_temp'].' °C' ?></td>
                        <td><?php echo $place['place_rugosity'].' m' ?></td>
                        <td><?php echo $place['place_mean_speed'].' m/s' ?></td>
                        <td><?php echo $place['place_std_deviation'] ?></td>
                        <td><?php echo $place['place_scale_factor'] ?></td>
                        <td><?php echo $place['place_shape_factor'] ?></td>
                        <td>
                            <a href="<?php echo Uri::create('place/edit/:id', array('id' => $place['place_id'])) ?>" class="btn btn-xs btn-warning<?php if ($place->place_verified) echo ' disabled' ?>" role="button"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
                            <a href="<?php echo Uri::create('place/delete/:id', array('id' => $place['place_id'])) ?>" class="btn btn-xs btn-danger<?php if ($place->place_verified) echo ' disabled' ?>" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a>
                        </td>
                    </tr>
<?php endforeach ?>
                </table>
            </div>
        </div>
        <div class="row">
                <div class="col-sm-offset-1 col-sm-5">
                    <a href="<?php echo Uri::create('place/add') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter</a>
                    <a href="<?php echo Uri::create('place/import') ?>" class="btn btn-primary"><span class="glyphicon glyphicon-import" aria-hidden="true"></span> &nbsp; Importer</a>
                </div>
                <div class="col-sm-4">
<?php echo $pagination ?>
                </div>
        </div>
    </div>
</div>