<!-- List place -->

<div class="row">
    <div class="clearness col-sm-12">

        <div class="row">
            <div class="lead col-sm-12">
                <h1>Importer un site</h1>
            </div>
        </div>
                
        <div class="row">
            <div class="col-sm-offset-1 col-sm-3">
                <a href="http://eolatlas.calsimeol.fr/" target="_blank"><?php echo Asset::img('EolAtlas.png', array('class' => 'img-responsive')) ?></a>
            </div>
            <div class="col-sm-7 text" style="padding-top: 20px;">
                <p>EolAtlas est un atlas éolien sur lequel l’utilisateur peut trouver les données sur le vent d’un site (les données climatiques viennent de Météo France).</p>
                <p>Sont ajoutés également, différents filtres donnant les zones d’exclusion dans lesquelles des parcs éoliens ne peuvent pas être installés
                    (réserves naturelles, zones militaires…).</p>
                <p>Vous pouvez visiter le site d'EolAtlas pour choisir un site en fonction de tous ces élements : <a href="http://eolatlas.calsimeol.fr/"  target="_blank">Site d'EolAtlas</a></p>
            </div>
        </div>
                

        <div class="row" style="margin-top: 20px">
            <div class="col-sm-offset-1 col-sm-10">
                <form class="form-horizontal marginLR" method="post">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <b>Coordonées géographiques</b>
                                    <a href="#pop" class="pop pull-right" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto" style="margin-top: 1px"
                                       data-content="Entrer les coordonées géographiques de votre site dans les champs ci-dessous ou cliquez sur la carte.<br><br>
                                       <i>Les coordonnées seront envoyées à EolAtlas, qui renverra les données de la station météo la plus proche.</i><br><br>
                                       <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
                                       title="<b>AIDE : Coordonées géographiques</b>">
                                        <span class="glyphicon glyphicon-question-sign"></span>
                                    </a>
                                </div>
                                <div class="panel-body">
                                    <br>                                    
                                    <div id="divLatitude" class="form-group">
                                            <div class="col-md-4">
                                                    <label for="latitude" class="control-label">Latitude : </label>
                                                    <br>
                                                    <span class="error help-block">Entre -90 et 90°</span>
                                                    <span class="good help-block"></span>
                                            </div>
                                            <div class="col-xs-7 -marginLR">
                                                    <div class="input-group">
                                                            <input id="latitude" type="text" name="place_latitude" class="form-control" placeholder="49.50"/>
                                                            <span class="glyphicon glyphicon-remove form-control-feedback shift error"></span>
                                                            <span class="glyphicon glyphicon-ok form-control-feedback shift good"></span>
                                                            <span class="input-group-addon">°</span>
                                                    </div>
                                            </div>
                                            <div class="col-xs-1">
                                                    <div class="pop">
                                                            <a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
                                                               data-content="Entrer une latitude comprise entre -90° et 90°.<br><br>
                                                               <i>La latitude correspond au positionnement nord/sud d'un point et est représentée par une valeur angulaire. Elle varie entre 0° à l'équateur et +/- 90° aux pôles.</i>
                                                               <br><br><span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
                                                               title="<b>AIDE : Latitude du site</b>">
                                                                    <span class="glyphicon glyphicon-question-sign"></span>
                                                            </a>
                                                    </div>
                                            </div>
                                    </div>
                                    
                                    <div id="divLongitude" class="form-group">
                                            <div class="col-md-4">
                                                    <label for="longitude" class="control-label">Longitude : </label>
                                                    <br>
                                                    <span class="error help-block">Entre -180 et 180°</span>
                                                    <span class="good help-block"></span>
                                            </div>
                                            <div class="col-xs-7 -marginLR">
                                                    <div class="input-group">
                                                            <input id="longitude" type="text" name="place_longitude" class="form-control" placeholder="123.50"/>
                                                            <span class="glyphicon glyphicon-remove form-control-feedback shift error"></span>
                                                            <span class="glyphicon glyphicon-ok form-control-feedback shift good"></span>
                                                            <span class="input-group-addon">°</span>
                                                    </div>
                                            </div>
                                            <div class="col-xs-1">
                                                    <div class="pop">
                                                            <a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
                                                               data-content="Entrer une longitude comprise entre -180° et 180°.<br><br>
                                                               <i>La longitude correspond au positionnement est/ouest d'un point et est représentée par une valeur angulaire. Elle varie entre 0° (méridien de Greenwich) et +/- 180°.</i>
                                                               <br><br><span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
                                                               title="<b>AIDE : Longitude du site</b>">
                                                                    <span class="glyphicon glyphicon-question-sign"></span>
                                                            </a>
                                                    </div>
                                            </div>
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

  $('#latitude').val(location.k);
  $('#divLatitude').addClass('has-feedback');
  $('#divLatitude').addClass('has-success').removeClass('has-error') && $('#divLatitude').find('.good').show() && $('#divLatitude').find('.error').hide();
  $('#longitude').val(location.D);
  $('#divLongitude').addClass('has-feedback');
  $('#divLongitude').addClass('has-success').removeClass('has-error') && $('#divLongitude').find('.good').show() && $('#divLongitude').find('.error').hide();

  if(marker){ //on vÃ©rifie si le marqueur existe
    marker.setPosition(location); //on change sa position
  }else{
    marker = new google.maps.Marker({ //on crÃ©Ã© le marqueur
    position: location, 
    map: map
    });
  }
}    
        
    $(function () {
            //input verification and feedback when the user modifies the latitude
            $('#latitude').keyup(function() {
                $('#divLatitude').addClass('has-feedback');
                $('#latitude').val() >= -90 && $('#latitude').val() <=90 && $('#latitude').val() !== '' ? $('#divLatitude').addClass('has-success').removeClass('has-error') && $('#divLatitude').find('.good').show() && $('#divLatitude').find('.error').hide()  : $('#divLatitude').addClass('has-error').removeClass('has-success') && $('#divLatitude').find('.error').show() && $('#divLatitude').find('.good').hide();	 
            });
            
            //input verification and feedback when the user modifies the longitude
            $('#longitude').keyup(function() {
                $('#divLongitude').addClass('has-feedback');
                $('#longitude').val() >= -180 && $('#longitude').val() <=180 && $('#longitude').val() !== '' ? $('#divLongitude').addClass('has-success').removeClass('has-error') && $('#divLongitude').find('.good').show() && $('#divLongitude').find('.error').hide()  : $('#divLongitude').addClass('has-error').removeClass('has-success') && $('#divLongitude').find('.error').show() && $('#divLongitude').find('.good').hide();	 
            });
        });

//popover
$(function (){
   $(".pop").popover(); 
});
// Contain the popover within the body NOT the element it was called in.
$('[data-toggle="popover"]').popover({
    container: 'body'
});


    </script>