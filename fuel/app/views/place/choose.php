<!-- choice of site page -->

        <div class="row">
            <div class="clearness col-sm-12">
                
                <div class="row">
                    <div class="lead col-sm-3">
                        <h1>Simulation</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-offset-3 col-sm-6">
                        <form class="form-horizontal marginLR" method="post">

                            <div class="form-group">
                                <legend>Choix du site</legend>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <select id="select" name="choice_site" class="form-control" >
                                        <optgroup label="Sites">
<?php if (count($places) != 0) : ?>
    <?php foreach ($places as $place) : ?>
                                            <option value="<?php echo $place->place_id ?>"><?php echo $place->place_name ?></option>
    <?php endforeach ?>
<?php else : ?>
                                            <option value="default">Il n'y a pas de sites</option>
<?php endif ?>
                                        </optgroup>
                                        <optgroup label="Autre">
                                            <option value="import">Choix d'un site dans la base de données de EolAtlas</option>
                                            <option value="munual">Création manuelle d'un site</option>
                                        </optgroup>
                                    </select>
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

