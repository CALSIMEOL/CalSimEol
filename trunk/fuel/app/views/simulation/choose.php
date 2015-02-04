<!-- choice of site page -->

        <div class="row">
            <div class="clearness col-sm-12">
                
                <div class="row">
                    <div class="lead col-sm-12">
                        <h1>Simulation</h1>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-sm-offset-3 col-sm-6">
                        <form class="form-horizontal marginLR" method="post">

                            <div class="form-group">
                                <legend>Choix du site
                                    <a href="#pop" class="pop pull-right" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto" style="margin-top: 1px"
                                       data-content='Choisir un site parmis la liste ou aller dans le menu "liste sites" pour en créer un nouvreau.'
                                       title="<b>AIDE : Choix du site</b>">
                                            <span class="glyphicon glyphicon-question-sign small"></span>
                                    </a>
                                </legend>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <select id="select" name="place_choice" class="form-control" >
                                        <optgroup label="Sites">
<?php if (count($places) != 0) : ?>
    <?php foreach ($places as $place) : ?>
                                            <option value="<?php echo $place->place_id ?>"<?php echo $sim_place == $place->place_id ? ' selected' : '' ?>><?php echo $place->place_name ?></option>
    <?php endforeach ?>
<?php else : ?>
                                            <option value="default"<?php echo $sim_place == 'default' ? ' selected' : '' ?>>Il n'y a pas de sites</option>
<?php endif ?>

                                        </optgroup>
                                        <!--NOT USED OPTION--
                                            <optgroup label="Autre">
                                            <option value="import"<?php echo $sim_place == 'import' ? ' selected' : '' ?>>Choix d'un site dans la base de données de EolAtlas</span></option>
                                            <option value="manual"<?php echo $sim_place == 'manual' ? ' selected' : '' ?>>Création manuelle d'un site</option>
                                        </optgroup>-->
                                    </select>
                                </div>
                            </div>
                            <br><br>
                            <div class="form-group">
                                <legend>Choix de l'éolienne
                                    <a href="#pop" class="pop pull-right" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto" style="margin-top: 1px"
                                       data-content='Choisir un site parmis la liste ou aller dans le menu "liste éoliennes" pour en créer une nouvelle.'
                                       title="<b>AIDE : Choix de l'éolienne</b>">
                                            <span class="glyphicon glyphicon-question-sign small"></span>
                                    </a>
                                </legend>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <select id="select" name="turbine_choice" class="form-control" >
                                        <optgroup label="Catalogue">
<?php if (count($turbines) != 0) : ?>
    <?php foreach ($turbines as $turbine) : ?>
                                            <option value="<?php echo $turbine->turbine_id ?>"<?php echo $sim_turbine == $turbine->turbine_id ? ' selected' : '' ?>><?php echo $turbine->turbine_manufacturer.' '.$turbine->turbine_name ?></option>
    <?php endforeach ?>
<?php else : ?>
                                            <option value="default"<?php echo $sim_turbine == 'default' ? ' selected' : '' ?>>Il n'y a pas d'éoliennes</option>
<?php endif ?>


                                        </optgroup>
                                        <!--NOT USED OPTION--
                                            <optgroup label="Autre">
                                            <option value="manual"<?php $sim_turbine == 'manual' ? ' selected' : '' ?>>Création manuelle d'une éolienne</option>
                                        </optgroup>-->
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

<script type="text/javascript">

//popover
$(function (){
   $(".pop").popover(); 
});
// Contain the popover within the body NOT the element it was called in.
$('[data-toggle="popover"]').popover({
	container: 'body'
});


</script>
