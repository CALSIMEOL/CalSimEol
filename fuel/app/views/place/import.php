<!-- List place -->

<div class="row">
    <div class="clearness col-sm-12">

        <div class="row">
            <div class="lead col-sm-5">
                <h1>Importer un site</h1>
            </div>
        </div>
                
        <div class="row">
            <div class="col-sm-offset-1 col-sm-3">
                <a href="http://eol.calsimeol.fr/eol"  target="_blank"><?php echo Asset::img('EolAtlas.png', array('class' => 'img-responsive')) ?></a>
            </div>
            <div class="col-sm-7 text" style="padding-top: 20px;">
                <p>EolAtlas est un atlas éolien sur lequel l’utilisateur peut trouver les données sur le vent d’un site (les données climatiques viennent de Météo France).</p>
                <p>Sont ajoutés également, différents filtres donnant les zones d’exclusion dans lesquelles des parcs éoliens ne peuvent pas être installés
                    (réserves naturelles, zones militaires…).</p>
                <p>Vous pouvez visiter le site d'EolAtlas pour choisir un site en fonction de tous ces élements : <a href="http://eol.calsimeol.fr/eol"  target="_blank">Site d'EolAtlas</a></p>
            </div>
        </div>
                

        <div class="row" style="margin-top: 20px">
            <div class="col-sm-offset-1 col-sm-10">
                <form method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <b>Coordonées géographiques</b>
                                    <a href="#pop" class="pop pull-right" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto" style="margin-top: 1px"
                                       data-content="Entrer les coordonées géographiques de votre site dans les champs ci-dessous ou cliquez sur la carte.<br><br>
                                       <i>Les coordonnées seront envoyé à EolAtlas, qui nous renverra les données de la stations météo la plus proche.</i><br><br>
                                       <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
                                       title="<b>AIDE : Courbe de puissance</b>">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <br />
                                    <div class="form-group">
                                        <label for="placeLatitude" class="control-label">Latitude</label>
                                        <input type="text" class="form-control" name="place_latitude" id="placeLatitude" placeholder="0" aria-describedby="placeLatitudeHelp">
                                        <span id="placeLatitudeHelp" class="help-block">Latitude du site (-90 à 90).</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="placeLongitude" class="control-label">Longitude</label>
                                        <input type="text" class="form-control" name="place_longitude" id="placeLongitude" placeholder="0" aria-describedby="placeLongitudeHelp">
                                        <span id="placeLongitudeHelp" class="help-block">Longitude du site (-180 à 180).</span>
                                    </div>
                                    <button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6" style="margin-bottom: 20px">
                            <div align="center" id="googleMap" style="width:100%;height:400px"></div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp" type="text/javascript"></script>
    <script type="text/javascript">

var map, marker;

$(function () {
  var mapOptions={
  zoom: 5,
  center: new google.maps.LatLng(46.2276, 2.2137),
  mapTypeId: 'hybrid'
  };

  map = new google.maps.Map(document.getElementById('googleMap'), mapOptions);

  google.maps.event.addListener(map, 'click', function(event) {
      placeMarker(event.latLng);
    });
});

function placeMarker(location) {

  $('#placeLatitude').val(location.k);
  $('#placeLongitude').val(location.D);

  if(marker){ //on vÃ©rifie si le marqueur existe
    marker.setPosition(location); //on change sa position
  }else{
    marker = new google.maps.Marker({ //on crÃ©Ã© le marqueur
    position: location, 
    map: map
    });
  }
}    
    
//popover
$(function (){
   $(".pop").popover(); 
});
// Contain the popover within the body NOT the element it was called in.
$('[data-toggle="popover"]').popover({
    container: 'body'
});


    </script>