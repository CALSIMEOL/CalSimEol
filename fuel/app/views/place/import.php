<!-- List place -->

<div class="row">
    <div class="clearness col-sm-12">

        <div class="row">
            <div class="lead col-sm-4">
                <h1>Importer un site</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-offset-1 col-sm-10">
                <form method="post">
                    <div class="row">
                        <div class="col-sm-6">
							<div align="center" id="googleMap" style="width:400px;height:400px"></div>
                        </div>
                        <div class="col-sm-6">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h3 class="panel-title">Coordonées géographiques</h3>
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
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
    <script src="http://maps.google.com/maps?file=api&amp;v=2&amp;key=AIzaSyA9wi4SKtHBQe94Bm3_Lcjgg3QD3LD2Ct4"
      type="text/javascript"></script>
    <script type="text/javascript">

$(function () {
	if (GBrowserIsCompatible()) {
		var map = new GMap2(document.getElementById("googleMap"));
		map.addControl(new GSmallMapControl());
		map.addControl(new GMapTypeControl());

		var center = new GLatLng(46.2276, 2.2137);
		map.setCenter(center, 5);

//		geocoder = new GClientGeocoder();

		var marker = new GMarker(center, {draggable: true});  
		map.addOverlay(marker);

//		document.getElementById("lat").innerHTML = center.lat().toFixed(5);
//		document.getElementById("lng").innerHTML = center.lng().toFixed(5);

		GEvent.addListener(marker, "dragend", function() {
			var point = marker.getPoint();
			map.panTo(point);

//			document.getElementById("lat").innerHTML = point.lat().toFixed(5);
//			document.getElementById("lng").innerHTML = point.lng().toFixed(5);
		});

		GEvent.addListener(map, "moveend", function() {
			map.clearOverlays();
			var center = map.getCenter();
			var marker = new GMarker(center, {draggable: true});
			map.addOverlay(marker);
//			document.getElementById("lat").innerHTML = center.lat().toFixed(5);
//			document.getElementById("lng").innerHTML = center.lng().toFixed(5);

			GEvent.addListener(marker, "dragend", function() {
				var point =marker.getPoint();
				map.panTo(point);
	//			document.getElementById("lat").innerHTML = point.lat().toFixed(5);
	//			document.getElementById("lng").innerHTML = point.lng().toFixed(5);
			});
		});
	}
});

/*       function showAddress(address) {
       var map = new GMap2(document.getElementById("googleMap"));
       map.addControl(new GSmallMapControl());
       map.addControl(new GMapTypeControl());
       if (geocoder) {
        geocoder.getLatLng(
          address,
          function(point) {
            if (!point) {
              alert(address + " not found");
            } else {
          document.getElementById("lat").innerHTML = point.lat().toFixed(5);
       document.getElementById("lng").innerHTML = point.lng().toFixed(5);
         map.clearOverlays()
            map.setCenter(point, 14);
   var marker = new GMarker(point, {draggable: true});  
         map.addOverlay(marker);

        GEvent.addListener(marker, "dragend", function() {
      var pt = marker.getPoint();
         map.panTo(pt);
      document.getElementById("lat").innerHTML = pt.lat().toFixed(5);
         document.getElementById("lng").innerHTML = pt.lng().toFixed(5);
        });


     GEvent.addListener(map, "moveend", function() {
          map.clearOverlays();
    var center = map.getCenter();
          var marker = new GMarker(center, {draggable: true});
          map.addOverlay(marker);
          document.getElementById("lat").innerHTML = center.lat().toFixed(5);
       document.getElementById("lng").innerHTML = center.lng().toFixed(5);

     GEvent.addListener(marker, "dragend", function() {
     var pt = marker.getPoint();
        map.panTo(pt);
    document.getElementById("lat").innerHTML = pt.lat().toFixed(5);
       document.getElementById("lng").innerHTML = pt.lng().toFixed(5);
        });
 
        });

            }
          }
        );
      }
    }//*/
    </script>