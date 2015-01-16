			<form method="post">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="turbineName" class="control-label">Nom de l'éolienne</label>
							<input type="text" class="form-control" id="turbineName" placeholder="Alstom" aria-describedby="turbineNameHelp">
							<span id="turbineNameHelp" class="help-block">Nom de l'éolienne pour pouvoir l'identifier dans la liste.</span>
						</div>
						<div class="form-group">
							<label for="turbinePower" class="control-label">Puissance nominale de l'éolienne</label>
							<div class="input-group">
								<input type="text" class="form-control" id="turbinePower" placeholder="1234.56" aria-describedby="turbinePowerAddon">
								<span class="input-group-addon" id="turbinePowerAddon">kW</span>
							</div>
						</div>
						<div class="form-group">
							<label for="turbineBlades" class="control-label">Nombre de pales</label>
							<input type="text" class="form-control" id="turbineBlades" placeholder="3">
						</div>
						<div class="form-group">
							<label for="turbineDiameter" class="control-label">Diamètre de l'hélice</label>
							<div class="input-group">
								<input type="text" class="form-control" id="turbineDiameter" placeholder="1234.56" aria-describedby="turbineDiameterAddon">
								<span class="input-group-addon" id="turbineDiameterAddon">m</span>
							</div>
						</div>
						<div class="form-group">
							<label for="turbineHeight" class="control-label">Hauteur du moyeux</label>
							<div class="input-group">
								<input type="text" class="form-control" id="turbineHeight" placeholder="1234.56" aria-describedby="turbineHeightAddon">
								<span class="input-group-addon" id="turbineHeightAddon">m</span>
							</div>
						</div>
						<div class="form-group">
							<label for="turbineStartSpeed" class="control-label">Vitesse de démarrage</label>
							<div class="input-group">
								<input type="text" class="form-control" id="turbineStartSpeed" placeholder="1234.56" aria-describedby="turbineStartSpeedAddon">
								<span class="input-group-addon" id="turbineStartSpeedAddon">m.s<sup>-1</sup></span>
							</div>
						</div>
						<div class="form-group">
							<label for="turbineStopSpeed" class="control-label">Vitesse de coupure</label>
							<div class="input-group">
								<input type="text" class="form-control" id="turbineStopSpeed" placeholder="1234.56" aria-describedby="turbineStopSpeedAddon">
								<span class="input-group-addon" id="turbineStopSpeedAddon">m.s<sup>-1</sup></span>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="panel panel-default">
							<div class="panel-heading">Courbe de puissance</div>
							<div class="panel-body">
								<div id="power-chart" style="min-width: 310px; height: 400px; margin: 0 auto"></div>
								<table class="table table-striped table-condensed">
									<tr>
										<th>Vitesse</th>
										<th>Puissance</th>
									</tr>
									<tr><td>0</td><td>0</td></tr>
									<tr><td>1</td><td>0</td></tr>
									<tr><td>2</td><td>0</td></tr>
									<tr><td>3</td><td>1</td></tr>
									<tr><td>4</td><td>2</td></tr>
									<tr><td>5</td><td>4</td></tr>
									<tr><td>6</td><td>8</td></tr>
									<tr><td>7</td><td>16</td></tr>
									<tr><td>8</td><td>32</td></tr>
									<tr><td>9</td><td>32</td></tr>
								</table>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6 text-center">
						<a href="#" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Supprimer</a>
						<a href="#" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span> Annuler</a>
						<button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-ok" aria-hidden="true"></span> Sauvegarder</button>
						<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Ajouter</button>
					</div>
				</div>
			</form>
			<script type="text/javascript">
$(function () {
    $('#power-chart').highcharts({
    	chart: {
    		//type: 'spline'
    	},
        title: {
            text: 'Courbe de puissance'
        },
        subtitle: {
            text: 'Mesurée à 1.125 ?'
        },
        xAxis: {
            title:{
            	text: 'Vitesse du vent (m.s<sup>-1</sup>)'
            }
        },
        yAxis: {
            title: {
                text: 'Puissance (kW)'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            headerFormat: '<b>{series.name}</b><br />',
            pointFormat: '{point.x} kW : {point.y} m.s<sup>-1</sup>'
        },
        legend: {
            enable: true
        },
        series: [{
            name: '1.125',
            data: [0, 0, 0, 1, 2, 4, 8, 16, 32, 32]
        },{
        	name: 'Linéaire',
        	data: [0, 0, 0, 6, 12, 18, 24, 30, 36, 36]
        }]
    });
});
			</script>
