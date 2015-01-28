<!-- Add site -->

	<div class="row">
		<div class="clearness col-sm-12">

			<div class="row">
				<div class="lead col-sm-4">
					<h1>Ajout d'un site éolien</h1>
				</div>
			</div>

<?php if (isset($messages)) : ?>
	<?php foreach ($messages as $message) : ?>
			<div class="alert alert-danger" role="alert"><?php echo $message ?></div>
	<?php endforeach ?>
<?php endif ?>

			<div class="row">
				<div class="col-sm-offset-1 col-sm-10">
					<form class="form-horizontal marginLR" method="post">
						<input id="nbWindLines" name="nbWindLines" type="hidden"/> 
						<div class="form-group">
							<legend>Paramétrage du site</legend>
						</div>

						<div class="row">
	  <!----------------------------------------------------------------------Site parameters and wind rose------------------------------------------------------------>
							<div class="col-sm-6">

				  <!---------------------------------------------Site parameters-------------------------------------------------------->
							<div>

							<div id="divSiteName" class="form-group">
								<div class="col-md-4">
									<label for="siteName" class="control-label">Nom : </label>
									<br>
									<span class="error help-block">De 1 à 20 caractères</span>
									<span class="good help-block"></span> 
								</div>
								<div class="col-xs-7 -marginLR">
									<input id="siteName" type="text" name="place_name" value="<?php echo $place['place_name'] ?>" class="form-control"/>
									<span class="glyphicon glyphicon-remove form-control-feedback error"></span>
									<span class="glyphicon glyphicon-ok form-control-feedback good"></span>
								</div>
								<div class="col-xs-1">
									<div class="pop">
										<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
										   data-content="Entrer un nom pour ce site entre 1 et 20 caractères." title="<b>AIDE : Nom du site</b>">
											<span class="glyphicon glyphicon-question-sign"></span>
									</a>
									</div>
								</div>
							</div>

							<div id="divLatitude" class="form-group">
								<div class="col-md-4">
									<label for="latitude" class="control-label">Latitude : </label>
									<br>
									<span class="error help-block">Entre -90 et 90°</span>
									<span class="good help-block"></span>
								</div>
								<div class="col-xs-7 -marginLR">
									<div class="input-group">
										<input id="latitude" type="text" name="place_latitude" value="<?php echo $place['place_latitude'] ?>" class="form-control" placeholder="49.50"/>
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
										<input id="longitude" type="text" name="place_longitude" value="<?php echo $place['place_longitude'] ?>" class="form-control" placeholder="123.50"/>
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

							<div id="divAltitude" class="form-group">
								<div class="col-md-4">
									<label for="altitude" class="control-label">Altitude : </label>
									<br>
									<span class="error help-block">Entre -500 et 3000 mètres</span>
									<span class="good help-block"></span>
								</div>
								<div class="col-xs-7 -marginLR">
									<div class="input-group">
										<input id="altitude" type="text" name="place_altitude" value="<?php echo $place['place_altitude'] ?>" class="form-control" placeholder="1000"/>
										<span class="glyphicon glyphicon-remove form-control-feedback shift2 error"></span>
										<span class="glyphicon glyphicon-ok form-control-feedback shift2 good"></span>
										<span class="input-group-addon">m</span>
									</div>
								</div>
								<div class="col-xs-1">
									<div class="pop">
										<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
										   data-content="Entrer une altitude comprise entre -500 et 3000 m.<br><br>
										   <i>L'altitude est l'élévation verticale d'un lieu par rapport au niveau de la mer.</i>
										   <br><br><span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
										   title="<b>AIDE : Altitude du site</b>">
											<span class="glyphicon glyphicon-question-sign"></span>
										</a>
									</div>
								</div>
							</div>

							<div id="divTemp" class="form-group">
								<div class="col-lg-7">
									<label for="averageannualtemp" class="control-label">Température moyenne annuelle :</label>
									<br>
									<span class="error help-block">Entre -50 et 50°C</span>
									<span class="good help-block"></span>
								</div>
								 <div class="col-xs-7 -marginLR">
									<div class="input-group">
										<input id="averageannualtemp" type="text" name="place_mean_temp" value="<?php echo $place['place_mean_temp'] ?>" class="form-control" placeholder="15.00"/>
										<span class="glyphicon glyphicon-remove form-control-feedback shift3 error"></span>
										<span class="glyphicon glyphicon-ok form-control-feedback shift3 good"></span>
										<span class="input-group-addon">°C</span>
									</div>
								</div>
								<div class="col-xs-1">
									<div class="pop">
										<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
										   data-content="Entrer une température entre -50 et 50 °C.<br><br>
										   <i>Moyenne des températures enregistrées sur le site sur une année.</i>
										   <br><br><span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
										   title="<b>AIDE : Température moyenne annuelle</b>">
											<span class="glyphicon glyphicon-question-sign"></span>
										</a>
									</div>
								</div>
							</div>

							<div class="form-group">
								<div class="col-lg-7">
									<label class="control-label">Masse volumique de l'air : </label>
								</div>
								<div class="col-xs-7 -marginLR">
									<div class="input-group">
										<input id="density" type="text" class="form-control" disabled="true"/>
										<span class="input-group-addon">kg/m<sup>3</sup></span>
									</div>
								</div>
								<div class="col-xs-1">
									<div class="pop">
										<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
										   data-content="<i>La masse volumique de l'air carractérise la masse d'air contenue dans un volume de 1 m<sup>2</sup>.
										   Elle varie avec la température et l'altitude.</i><br>
										   <?php echo str_replace('"', "'", Asset::img('densityForm.png', array('class' => 'img-responsive'))) ?>
										   <small>&rho; : masse volumique de l'air h : altitude T : température en kelvin</small>"
										   title="<b>AIDE : Masse volumique de l'air</b>">
											<span class="glyphicon glyphicon-question-sign"></span>
										</a>
									</div>
								</div>
							</div>

							<div id="divRoughness" class="form-group">
								<div class="col-lg-7">
									<label for="roughnesslength" class="control-label">Longueur de rugosité :</label>
									<br>
									<span class="error help-block">Entre 0.0002 et 2 m</span>
									<span class="good help-block"></span>
								</div>
								<div class="col-xs-7 -marginLR">
									<div class="input-group">
										<input id="roughnesslength" type="text" name="place_rugosity" value="<?php echo $place['place_rugosity'] ?>" class="form-control" placeholder="0.1"/>
										<span class="glyphicon glyphicon-remove form-control-feedback shift2 error"></span>
										<span class="glyphicon glyphicon-ok form-control-feedback shift2 good"></span>
										<span class="input-group-addon">m</span>
									</div>	 
							   </div>
								<div class="col-xs-1">
									<div class="pop">
										<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
										   data-content="Entrer une longueur de rugosité comprise entre 0.0002 et 2 m.<br><br>
										   <i>La longueur de rugosité est la hauteur au dessus du sol où s'applique la condition d'adhérance, c'est à dire où le vecteur vent moyen est égal au vecteur nul. Elle dépend de l'homogénéité du terrain et du type d'obstacles.
										   <br><small><a href='http://eolienne.f4jr.org/rugosite' target='_blank'>Cliquer ici pour des exemples de longueurs de rugosités</a></small></i>
										   <br><br><span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
										   title="<b>AIDE : Longueur de rugosité</b>">
											<span class="glyphicon glyphicon-question-sign"></span>
										</a>
									</div>
								</div>
							</div>
						  
							</div>
				  <!-------------------------------------------------------------------------------------------------------------------->


				  <!------------------------------------------------wind rose------------------------------------------------------------>
								<div class="col-sm-12 -marginLR" style="margin-left: -30px">
									<div class="panel panel-default">

										<div class="panel-heading">
											<b>Rose des vents</b>
												<a href="#pop" class="pop pull-right" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
													data-content="<i>La rose des vents est une figure indiquant les vents dominants, c'est à dire la fréquence des vents selon leurs directions.</i>"
												   title="<b>AIDE : Rose des vents</b>">
													<span class="glyphicon glyphicon-question-sign"></span>
												</a>
											<br>(n'intervient pas dans le dimensionnement)
										</div>

										<div class="panel-body">

											<div class="form-inline">

												<div class="col-xs-6">
													<div class="radio">
														<label for="unknown" class="radio">
														<input type="radio" name="roseSources" value="unknown" id="unknown" checked="" onclick="windRose()"> Non connue </label>
													</div>
												</div>

												<div class="col-xs-6">
													<div class="radio">
														<label for="known" class="radio">
														<input type="radio" name="roseSources" value="known" id="known" onclick="windRose()"> Connue </label>
													</div>
												</div>

											</div>

											<br/> <br/> <br/>
											<div id="knowRose">
												La rose des vents ne sera affichée qu'à titre indicatif. &nbsp;
												<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
												   data-content="La somme des occurances heures/an doit être égale à 8760h et la vitesse moyenne doit être comprise entre 0 et 20 m/s
													<br><br><span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
												   title="<b>AIDE : Rose des vents</b>">
													<span class="glyphicon glyphicon-question-sign"></span>
												</a>
												<div id="roseTable">
													<table class="table table-striped table-condensed">

														<tr>
															<th width=22%>Direction</th>
															<th>Occurences/an</th>
															<th>Vitesse moyenne &nbsp;</th>
															<th>&nbsp <span class="glyphicon glyphicon-remove form-control-feedback error"></span><span class="glyphicon glyphicon-ok form-control-feedback good"></span></th>
														</tr>

														<tr><td>Nord</td><td><input type="text" id="windProb1" name="wind_probability_1" class="form-control input-sm windProb"/></td><td><input type="text" id="windMean1" name="wind_mean_speed_1" class="form-control input-sm windMean"/></td><td></td></tr>
														<tr><td>Nord-ouest</td><td><input type="text" id="windProb2" name="wind_probability_2" class="form-control input-sm windProb"/></td><td><input type="text" id="windMean2" name="wind_mean_speed_2" class="form-control input-sm windMean"/></td><td></td></tr>
														<tr><td>Ouest</td><td><input type="text" id="windProb3" name="wind_probability_3" class="form-control input-sm windProb"/></td><td><input type="text" id="windMean3" name="wind_mean_speed_3" class="form-control input-sm windMean"/></td><td></td></tr>
														<tr><td>Sud-ouest</td><td><input type="text" id="windProb4" name="wind_probability_4" class="form-control input-sm windProb"/></td><td><input type="text" id="windMean4" name="wind_mean_speed_4" class="form-control input-sm windMean"/></td><td></td></tr>
														<tr><td>Sud</td><td><input type="text" id="windProb5" name="wind_probability_5" class="form-control input-sm windProb"/></td><td><input type="text" id="windMean5" name="wind_mean_speed_5" class="form-control input-sm windMean"/></td><td></td></tr>
														<tr><td>Sud-est</td><td><input type="text" id="windProb6" name="wind_probability_6" class="form-control input-sm windProb"/></td><td><input type="text" id="windMean6" name="wind_mean_speed_6" class="form-control input-sm windMean"/></td><td></td></tr>
														<tr><td>Est</td><td><input type="text" id="windProb7" name="wind_probability_7" class="form-control input-sm windProb"/></td><td><input type="text" id="windMean7" name="wind_mean_speed_7" class="form-control input-sm windMean"/></td><td></td></tr>
														<tr><td>Nord-est</td><td><input type="text" id="windProb8" name="wind_probability_8" class="form-control input-sm windProb"/></td><td><input type="text" id="windMean8" name="wind_mean_speed_8" class="form-control input-sm windMean"/></td><td></td></tr>

													</table>
													<span class="error help-block">Nombre total d'heures doit être égal à 8760 h et vitesse moyenne comprise entre 0 et 20 m.s<sup>-1</sup></span>
													<span class="good help-block">Saisie correcte</span>
												</div>
											</div>

											<div id="unknowRose" class="marginLR">

												La rose des vents ne sera pas affichée dans les résultats finaux.
											</div>

										</div>
									</div>
								</div>
				  <!-------------------------------------------------------------------------------------------------------------------->				  
							</div>
	  <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->						  


							<div class="col-sm-6">
	  <!----------------------------------------------------------------------Wind distribution------------------------------------------------------------>
								<div class="panel panel-default">

									<div class="panel-heading">
										<b>Distribution des vents</b>
										<a href="#pop" class="pop pull-right" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto" style="margin-top: 1px"
										   data-content="<i>La vitesse du vent varie en permanence. Pour prévoir la production d'énergie d'une éolienne il faut connaître la vitesse du vent et sa fréquence associée.</i>"
										   title="<b>AIDE : Distribution des vents</b>">
											<span class="glyphicon glyphicon-question-sign"></span>
										</a>
									</div>

									<div class="panel-body">

										<div class="form-inline">
											<div class="row">
												<div class="col-xs-3">
													<div class="radio">
														<label for="simple" class="radio">
														<input type="radio" name="distribSources" value="simple" id="simple" checked="" onclick="windDistribution()"> Simple </label>
													</div>
												</div>
												<div class="col-xs-1">
													<a href="#pop" class="pop pull-left" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto" style="margin-top: 13px"
													   data-content="Choisir parmis les 3 options possibles en fonction des données en votre possession.<br><br>
														<i>La distribution de Weibull permet souvent une bonne approximation de la distribution de la vitesse du vent. La formule de Weibull est la suivante :</i><br>
														<?php echo str_replace('"', "'", Asset::img('weibullForm.png', array('class' => 'img-responsive'))) ?>
														<small>A : facteur d'échelle de Weibull.<br>
														k : facteur de forme de Weibull.</small>"
														title="<b>AIDE : Paramètrage simple de la distribution des vents</b>">
														 <span class="glyphicon glyphicon-question-sign"></span>
													 </a>
												</div>
												<div class="col-xs-offset-2 col-xs-3">
													<div class="radio">
														<label for="detailed" class="radio">
														<input type="radio" name="distribSources" value="detailed" id="detailed" onclick="windDistribution()"> Détaillé </label>
													</div>
												</div>
												<div class="col-xs-1">
													<a href="#pop" class="pop pull-left" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="top" style="margin-top: 13px"
														data-content="Entrer pour chaque vitesse de vent son occurence en heures/an. La somme des occurances heure/an doit être égale à 8760h.
														<br><br><span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
														title="<b>AIDE : Paramètrage détaillé de la distribution des vents</b>">
														 <span class="glyphicon glyphicon-question-sign"></span>
													 </a>
												</div>
											</div>
											<br>
											<div class="row">
												<div id="divElevation">
													<div class="col-lg-7">
														<label for="ElevationOfTheMeasurement" class="control-label">Altitude de la prise de mesure : </label>
														<br>
														<span class="error help-block">Entre -500 et 3000 m</span>
														<span class="good help-block"></span>
													</div>
													<div class="col-xs-7">
														<div class="input-group">
															<input id="ElevationOfTheMeasurement" type="text" name="place_altitude_meas" value="<?php echo $place['place_altitude_meas'] ?>" class="form-control" placeholder="1000"/>
															<span class="glyphicon glyphicon-remove form-control-feedback shift2 error"></span>
															<span class="glyphicon glyphicon-ok form-control-feedback shift2 good"></span>
															<span class="input-group-addon">m</span>
														</div>
													</div>
													<div class="col-xs-1">
														<div class="pop">
															<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
															   data-content="Entrer une altitude comprise entre -500 et 3000 m.<br><br>
															   <i>L'altitude de la prise de mesure est l'élévation verticale (par rapport au niveau de la mer) à laquelle ont été mesurés les vitesses de vents pour ce site.</i><br><br>
															   <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
															   accesskey=""title="<b>AIDE : Altitude de la prise de mesure</b>">
																<span class="glyphicon glyphicon-question-sign"></span>
															</a>
														</div>
													</div>
												</div>
											</div>											
										</div>
					<!-------------------------------------------- Wind distribution - detailed ------------------------------------------>
										<br>
										<div id="displayWindTable">
											
											<div class="col-sm-12">
												<table id="windTable" class="table table-responsive table-striped table-condensed center-block">

													<tr>
														<th>Vitesse [m/s]</th>
														<th>Occurences/an</th>
                                                                                                                <th>Vitesse [m/s]</th>
														<th>Occurences/an</th>                                                                                                                
														<th><span class="glyphicon glyphicon-remove form-control-feedback error shift"></span><span class="glyphicon glyphicon-ok form-control-feedback good shift"></span></th>
													</tr>

													<tr><td>0</td><td><input type="text" id="windProbability0" name="place_propability_0" class="form-control input-sm"/></td><td >16</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>1</td><td><input type="text" id="windProbability1" name="place_propability_1" class="form-control input-sm"/></td><td>17</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>2</td><td><input type="text" id="windProbability2" name="place_propability_2" class="form-control input-sm"/></td><td>18</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>3</td><td><input type="text" id="windProbability3" name="place_propability_3" class="form-control input-sm"/></td><td>19</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>4</td><td><input type="text" id="windProbability4" name="place_propability_4" class="form-control input-sm"/></td><td>20</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>5</td><td><input type="text" id="windProbability5" name="place_propability_5" class="form-control input-sm"/></td><td>21</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>6</td><td><input type="text" id="windProbability6" name="place_propability_6" class="form-control input-sm"/></td><td>22</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>7</td><td><input type="text" id="windProbability7" name="place_propability_7" class="form-control input-sm"/></td><td>23</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>8</td><td><input type="text" id="windProbability8" name="place_propability_8" class="form-control input-sm"/></td><td>24</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>9</td><td><input type="text" id="windProbability9" name="place_propability_9" class="form-control input-sm"/></td><td>25</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>10</td><td><input type="text" id="windProbability10" name="place_propability_10" class="form-control input-sm"/></td><td>26</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>11</td><td><input type="text" id="windProbability11" name="place_propability_11" class="form-control input-sm"/></td><td>27</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>12</td><td><input type="text" id="windProbability12" name="place_propability_12" class="form-control input-sm"/></td><td>28</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>13</td><td><input type="text" id="windProbability13" name="place_propability_13" class="form-control input-sm"/></td><td>29</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>14</td><td><input type="text" id="windProbability14" name="place_propability_14" class="form-control input-sm"/></td><td>30</td><td><input type="text" id="windProbability16" name="place_propability_16" class="form-control input-sm"/></td><td></td></tr>
                                                                                                        <tr><td>15</td><td><input type="text" id="windProbability15" name="place_propability_15" class="form-control input-sm"/></td></tr>
                                                                                                        
													
												</table>
												<span class="error help-block">Nombre total d'heures doit être égal à 8760 h</span>
												<span class="good help-block"></span>
												<br><br>
                                                                                                
												<!-- ADD AND DELETE ROW WITHIN WIND TABLE
                                                                                                <div class="pull-right">
													<span class="btn btn-info btn-xs" onclick="addRow()"><span class="glyphicon glyphicon-plus"></span> Ajouter une ligne</span>
													<span class="btn btn-danger btn-xs" onclick="deleteRow()"><span class="glyphicon glyphicon-trash"></span> Supprimer une ligne</span>
												</div>-->
                                                                                                
											</div>
											
										</div>
					<!---------------------------------------------------------------------------------------------------------------------->
										
					<!-------------------------------------------- Wind distribution - simple ------------------------------------------>
					
										<div id="windsimple" class="marginLR">

							   <!-------------------------------- Option 1 -------------------------------------->
											<div class="row">
												<div class="col-xs-2">
													<br><br><br>
													<input type="radio" name="choiceOption" id="opt1" value="opt1" checked="" onclick="intoxicateOption()">
												</div>
												<div id="option1" class="col-xs-10 panel panel-default">
													<br>
													<div class="marginLR" style="margin-top: -15px">
														<div id="divAverageSpeed" class="form-group">
															<div class="col-lg-9 -marginLR">
																<label for="averageWindSpeed1" class="control-label">Vitesse moyenne vent : </label>
																<br>
																<span class="error help-block">Entre 0.1 et 20 m/s</span>
																<span class="good help-block"></span>
															</div>
															<div class="col-xs-11 -marginLR">
																<div class="input-group">
																	
																	<input id="averageWindSpeed1" type="text" name="place_mean_speed" value="<?php echo $place['place_mean_speed'] ?>" class="form-control" placeholder="5.5"/>
																	<span class="glyphicon glyphicon-remove form-control-feedback shift5 error"></span>
																	<span class="glyphicon glyphicon-ok form-control-feedback shift5 good"></span>
																	<span class="input-group-addon">m/s</span>
																</div>
															</div>
															<div class="col-xs-1">
																<div class="pop">
																	<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
																	   data-content="Entrer une vitesse entre 0.1 et 20 m/s.<br><br>
																	   <i>Moyenne des vitesses de vents enregistrées sur le site pendant une année.</i><br><br>
																	   <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur<br>décimal.</span>"
																	   title="<b>AIDE : Vitesse moyenne du vent</b>">
																		<span class="glyphicon glyphicon-question-sign"></span>
																	</a>
																</div>
															</div>
														</div>
														<div id="divShapeFactor" class="form-group">
															<div class="col-lg-8 -marginLR">
																<label for="shape1" class="control-label">Facteur de forme k :</label>
																<br>
																<span class="error help-block">Entre 0.5 et 5</span>
																<span class="good help-block"></span>
															</div>
															<div class="col-xs-11 -marginLR">
																<input id="shape1" type="text" name="place_sape_factor" class="form-control" placeholder="2"/>
																<span class="glyphicon glyphicon-remove form-control-feedback error"></span>
																<span class="glyphicon glyphicon-ok form-control-feedback good"></span>
															</div>
															<div class="col-xs-1">
																<div class="pop">
																	<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
																	   data-content="Entrer une valeur comprise entre 0.5 et 5.<br><br>
																	   <i>k est le facteur de forme de Weibull. Il donne la forme de la distribution des vents. Une valeur faible implique un vent très variable alors qu'un vent constant implique une valeur élevée.</i><br><br>
																	   <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
																	   title="<b>AIDE : Facteur de forme K</b>">
																		<span class="glyphicon glyphicon-question-sign"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
							   <!------------------------------------------------------------------------------->

							   <!-------------------------------- Option 2 -------------------------------------->
											<div class="row">
												<div class="col-xs-2">
													<br><br><br>
													<input type="radio" name="choiceOption" id="opt2" value="opt2" onclick="intoxicateOption()">
												</div>
												<div id="option2" class="col-xs-10 panel panel-default">
													<br>
													<div class="marginLR" style="margin-top: -15px">
														<div id="divAverageSpeed2" class="form-group">
															<div class="col-lg-9 -marginLR">
																<label for="averageWindSpeed2" class="control-label">Vitesse moyenne vent : </label>
																<br>
																<span class="error help-block">Entre 0.1 et 20m.s<sup>-1</sup></span>
																<span class="good help-block"></span>
															</div>
															<div class="col-xs-11 -marginLR">
																<div class="input-group">
																	<input id="averageWindSpeed2" type="text" name="place_mean_speed" value="<?php echo $place['place_mean_speed'] ?>" class="form-control" placeholder="5.5"/>
																	<span class="glyphicon glyphicon-remove form-control-feedback shift5 error"></span>
																	<span class="glyphicon glyphicon-ok form-control-feedback shift5 good"></span>
																	<span class="input-group-addon">m/s</span>
																</div>
															</div>
															<div class="col-xs-1">
																<div class="pop">
																	<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
																	   data-content="Entrer une vitesse entre 0.1 et 20 m/s.<br><br>
																	   <i>Moyenne des vitesses de vents enregistrées sur le site pendant une année.</i><br><br>
																	   <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur<br>décimal.</span>"
																	   title="<b>AIDE : Vitesse moyenne du vent</b>">
																		<span class="glyphicon glyphicon-question-sign"></span>
																	</a>
																</div>
															</div>
														</div>
														<div id="divStdDeviation" class="form-group">
															<div class="col-lg-8 -marginLR">
																<label for="standardDeviation" class="control-label">Ecart type &sigma; :</label>
																<br>
																<span class="error help-block">Entre 0.1 et 50</span>
																<span class="good help-block"></span>
															</div>
															<div class="col-xs-11 -marginLR">
																<input id="standardDeviation" type="text" name="place_std_deviation" value="<?php $place['place_std_deviation'] ?>" class="form-control" placeholder="20.5"/>
																<span class="glyphicon glyphicon-remove form-control-feedback error"></span>
																<span class="glyphicon glyphicon-ok form-control-feedback good"></span>
															</div>
															<div class="col-xs-1">
																<div class="pop">
																	<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
																	   data-content="Entrer un nombre entre 0.1 et 50.<br><br>
																	   <i>L'écart type &sigma; est la mesure de la dispertion d'une variable aléatoire comme la vitesse du vent.</i><br><br>
																	   <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
																	   title="<b>AIDE : Ecart type &sigma;</b>">
																		<span class="glyphicon glyphicon-question-sign"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
						   <!------------------------------------------------------------------------------->
											
							   <!-------------------------------- Option 3 -------------------------------------->
											<div class="row">
												<div class="col-xs-2">
													<br><br><br>
													<input type="radio" name="choiceOption" id="opt3" value="opt3" onclick="intoxicateOption()">
												</div>
												<div id="option3" class="col-xs-10 panel panel-default">
													<br>
													<div class="marginLR" style="margin-top: -15px">
														<div id="divScaleFactor" class="form-group">
															<div class="col-lg-8 -marginLR">
																<label for="scaleFactor" class="control-label">Facteur d'échelle A : </label>
																<br>
																<span class="error help-block">Entre 0.1 et 20</span>
																<span class="good help-block"></span>
															</div>
															<div class="col-xs-11 -marginLR">
																<input id="scaleFactor" type="text" name="place_scale_factor" value="<?php echo $place['place_scale_factor'] ?>" class="form-control" placeholder="5.5"/>
																<span class="glyphicon glyphicon-remove form-control-feedback error"></span>
																<span class="glyphicon glyphicon-ok form-control-feedback good"></span>
															</div>
															<div class="col-xs-1">
																<div class="pop">
																	<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
																	   data-content="Entrer un nombre entre 0.1 et 20.<br><br>
																	   <i>A est le facteur d'échelle de Weibull exprimé en m/s. Il permet d'exprimer la chronologie d'une vitesse caractéristique. A est proportionnel à la vitesse moyenne du vent.</i><br><br>
																	   <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur décimal.</span>"
																	   title="<b>AIDE : Facteur de forme K</b>">
																		<span class="glyphicon glyphicon-question-sign"></span>
																	</a>
																</div>
															</div>
														</div>
														<div id="divShapeFactor2" class="form-group">
															<div class="col-lg-8 -marginLR">
																<label for="shape2" class="control-label">Facteur de forme k :</label>
																<span class="error help-block">Entre 0.5 et 5</span>
																<span class="good help-block"></span>
															</div>
															<div class="col-xs-11 -marginLR">
																<input id="shape2" type="text" name="place_shape_factor" value="<?php echo $place['place_shape_factor'] ?>" class="form-control" placeholder="2"/>
																<span class="glyphicon glyphicon-remove form-control-feedback error"></span>
																<span class="glyphicon glyphicon-ok form-control-feedback good"></span>
															</div>
															<div class="col-xs-1">
																<div class="pop">
																	<a href="#pop" class="pop" data-toggle="popover" data-html="true" data-trigger="focus" data-placement="auto"
																	   data-content="Entrer une valeur comprise entre 0.5 et 5.<br><br>
																	   <i>k est le facteur de forme de Weibull. Il donne la forme de la distribution des vents. Une valeur faible implique un vent très variable alors qu'un vent constant implique une valeur élevée.</i><br><br>
																	   <span class='decimalWarning'><span class='glyphicon glyphicon-warning-sign'></span>&nbsp; Entrer un point comme séparateur<br>décimal.</span>"
																	   title="<b>AIDE : Facteur de forme K</b>">
																		<span class="glyphicon glyphicon-question-sign"></span>
																	</a>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
							   <!-------------------------------------------------------------------------------->
											
										</div>
					<!---------------------------------------------------------------------------------------------------------------------->

									</div>

								</div>
	  <!---------------------------------------------------------------------------------------------------------------------------------------------------------------->
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



<!-------------------------------------------------------------------------JavaScript------------------------------------------------------------>

<script type="text/javascript">
	var windSpeed = 0;

//Displaying wind distribution
	function windDistribution(){
		
		$('input[type="radio"][name="distribSources"]:checked').val() === 'simple' ? $('#windsimple').css({'display': 'block'}) : $('#windsimple').css({'display': 'none'});
		$('input[type="radio"][name="distribSources"]:checked').val() === 'detailed' ? $('#displayWindTable').css({'display': 'block'}) : $('#displayWindTable').css({'display': 'none'});
	}
$(function () {
	windDistribution();
});

//Displaying wind rose
	function windRose(){
		
		$('input[type="radio"][name="roseSources"]:checked').val() === 'unknown' ? $('#unknowRose').css({'display': 'block'}) : $('#unknowRose').css({'display': 'none'});
		$('input[type="radio"][name="roseSources"]:checked').val() === 'known' ? $('#knowRose').css({'display': 'block'}) : $('#knowRose').css({'display': 'none'});
	}
	$(function () {
		windRose();
	});


/* ADD AND DELETE ROW WITHIN WIND TABLE

//adding a row within wind table
function addRow(){
	if (windSpeed<30){
		windSpeed++;
		$('#windTable').append('<tr><td>'+windSpeed+'</td><td><input type="text" id="windProbability'+windSpeed+'" name="place_probability_'+windSpeed+'" class="form-control input-sm"/></td><td></td></tr>');
		$('#nbWindLines').val(windSpeed);
	}
	else{
		
	}
}
//delete a row within wind table
function deleteRow(){
if(windSpeed>0){
		$('#windTable tr:last').remove();
		windSpeed--;
		$('#nbWindLines').val(windSpeed);
	}
}

*/

//intoxicate non selected option
function intoxicateOption(){
		$('input[type="radio"][name="choiceOption"]:checked').val() === 'opt1' ? $('#option1').find("*").prop('disabled', false) : $('#option1').find("*").prop('disabled', true);
		$('input[type="radio"][name="choiceOption"]:checked').val() === 'opt1' ? $('#option1').css({'opacity': '1'}) : $('#option1').css({'opacity': '0.33'});
//		$('input[type="radio"][name="choiceOption"]:checked').val() === 'opt1' ? $('#option2').find("*").val(''):null;
//		$('input[type="radio"][name="choiceOption"]:checked').val() === 'opt1' ? $('#option3').find("*").val(''):null;
		
		$('input[type="radio"][name="choiceOption"]:checked').val() === 'opt2' ? $('#option2').find("*").prop('disabled', false) : $('#option2').find("*").prop('disabled', true);
		$('input[type="radio"][name="choiceOption"]:checked').val() === 'opt2' ? $('#option2').css({'opacity': '1'}) : $('#option2').css({'opacity': '0.33'});
//	  $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt2' ? $('#option1').find("*").val(''):null;
//	  $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt2' ? $('#option3').find("*").val(''):null;
		
		$('input[type="radio"][name="choiceOption"]:checked').val() === 'opt3' ? $('#option3').find("*").prop('disabled', false) : $('#option3').find("*").prop('disabled', true);
		$('input[type="radio"][name="choiceOption"]:checked').val() === 'opt3' ? $('#option3').css({'opacity': '1'}) : $('#option3').css({'opacity': '0.33'});
//	  $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt3' ? $('#option1').find("*").val(''):null;
//	  $('input[type="radio"][name="choiceOption"]:checked').val() === 'opt3' ? $('#option2').find("*").val(''):null;
		
	}
$(function () {
	intoxicateOption();
});


$(function () {
		$('#siteName').keyup(function() {
		$('#divSiteName').addClass('has-feedback');
		$('#siteName').val().length > 0 && $('#siteName').val().length <=20 ? $('#divSiteName').addClass('has-success').removeClass('has-error') && $('#divSiteName').find('.good').show() && $('#divSiteName').find('.error').hide() : $('#divSiteName').addClass('has-error').removeClass('has-success') && $('#divSiteName').find('.error').show() && $('#divSiteName').find('.good').hide();	   
		});
		
		$('#latitude').keyup(function() {
		$('#divLatitude').addClass('has-feedback');
		$('#latitude').val() >= -90 && $('#latitude').val() <=90 && $('#latitude').val() !== '' ? $('#divLatitude').addClass('has-success').removeClass('has-error') && $('#divLatitude').find('.good').show() && $('#divLatitude').find('.error').hide()  : $('#divLatitude').addClass('has-error').removeClass('has-success') && $('#divLatitude').find('.error').show() && $('#divLatitude').find('.good').hide();	 
		});
		
		$('#longitude').keyup(function() {
		$('#divLongitude').addClass('has-feedback');
		$('#longitude').val() >= -180 && $('#longitude').val() <=180 && $('#longitude').val() !== '' ? $('#divLongitude').addClass('has-success').removeClass('has-error') && $('#divLongitude').find('.good').show() && $('#divLongitude').find('.error').hide()  : $('#divLongitude').addClass('has-error').removeClass('has-success') && $('#divLongitude').find('.error').show() && $('#divLongitude').find('.good').hide();	 
		});
		
		$('#altitude').keyup(function() {
		$('#divAltitude').addClass('has-feedback');
		$('#altitude').val() >= -500 && $('#altitude').val() <=3000 && $('#altitude').val() !== '' ? $('#divAltitude').addClass('has-success').removeClass('has-error') && $('#divAltitude').find('.good').show() && $('#divAltitude').find('.error').hide()  : $('#divAltitude').addClass('has-error').removeClass('has-success') && $('#divAltitude').find('.error').show() && $('#divAltitude').find('.good').hide();
		$('#altitude').val() >= -500 && $('#altitude').val() <=3000 && $('#altitude').val() !== '' && $('#averageannualtemp').val() >= -50 && $('#averageannualtemp').val() <=50 && $('#averageannualtemp').val() !== '' ? $('#density').val(function() {
			var altitude = parseFloat($('#altitude').val()); 
			var temp = parseFloat($('#averageannualtemp').val()); 
			var density; 
			density=(1013*28.97*Math.pow(((288-0.0065*altitude)/288),5.225))/(8.314*(temp+273.15)); 
			density=density.toFixed(5);
			return density;})
		: $('#density').val('');
		});
		
		$('#averageannualtemp').keyup(function() {
		$('#divTemp').addClass('has-feedback');
		$('#averageannualtemp').val() >= -50 && $('#averageannualtemp').val() <=50 && $('#averageannualtemp').val() !== '' ? $('#divTemp').addClass('has-success').removeClass('has-error') && $('#divTemp').find('.good').show() && $('#divTemp').find('.error').hide()  : $('#divTemp').addClass('has-error').removeClass('has-success') && $('#divTemp').find('.error').show() && $('#divTemp').find('.good').hide();
		$('#altitude').val() >= -500 && $('#altitude').val() <=3000 && $('#altitude').val() !== '' && $('#averageannualtemp').val() >= -50 && $('#averageannualtemp').val() <=50 && $('#averageannualtemp').val() !== '' ? $('#density').val(function() {
			var altitude = parseFloat($('#altitude').val()); 
			var temp = parseFloat($('#averageannualtemp').val()); 
			var density; 
			density=(1013*28.97*Math.pow(((288-0.0065*altitude)/288),5.225))/(8.314*(temp+273.15)); 
			density=density.toFixed(5);
			return density;})
		: $('#density').val('');
		});
		
		$('#roughnesslength').keyup(function() {
		$('#divRoughness').addClass('has-feedback');
		$('#roughnesslength').val() >= 0.0002 && $('#roughnesslength').val() <=2 && $('#roughnesslength').val() !== '' ? $('#divRoughness').addClass('has-success').removeClass('has-error') && $('#divRoughness').find('.good').show() && $('#divRoughness').find('.error').hide()  : $('#divRoughness').addClass('has-error').removeClass('has-success') && $('#divRoughness').find('.error').show() && $('#divRoughness').find('.good').hide();	 
		});
		
		$('.windProb').keyup(function() {
		var totalHours = 0;
		$('#roseTable').addClass('has-feedback');
		for(var j=1;j <= 8;j++){
			totalHours = totalHours + parseInt($('#windProb'+j+'').val());
		}
		for(j=1;j <= 8;j++){
			if($('#windMean'+j+'').val() >= 0 && $('#windMean'+j+'').val() <=20 && $('#windMean'+j+'').val() !== '' && totalHours ===8760 && totalHours !== ''){
				$('#roseTable').addClass('has-success').removeClass('has-error') && $('#roseTable').find('.good').show() && $('#roseTable').find('.error').hide();
			}
			else {
				$('#roseTable').addClass('has-error').removeClass('has-success') && $('#roseTable').find('.error').show() && $('#roseTable').find('.good').hide();
				break;
			}
		}
		});
		
		$('.windMean').keyup(function() {
		var totalHours = 0;
		$('#roseTable').addClass('has-feedback');
		for(var j=1;j <= 8;j++){
			totalHours = totalHours + parseInt($('#windProb'+j+'').val());
		}
		for(j=1;j <= 8;j++){
			if($('#windMean'+j+'').val() >= 0 && $('#windMean'+j+'').val() <=20 && $('#windMean'+j+'').val() !== '' && totalHours ===8760 && totalHours !== ''){
				$('#roseTable').addClass('has-success').removeClass('has-error') && $('#roseTable').find('.good').show() && $('#roseTable').find('.error').hide();
			}
			else {
				$('#roseTable').addClass('has-error').removeClass('has-success') && $('#roseTable').find('.error').show() && $('#roseTable').find('.good').hide();
				break;
			}
		}
		});
		
		$('#averageWindSpeed1').keyup(function() {
		$('#divAverageSpeed').addClass('has-feedback');
		$('#averageWindSpeed1').val() >= 0.1 && $('#averageWindSpeed1').val() <=20 && $('#averageWindSpeed1').val() !== '' ? $('#divAverageSpeed').addClass('has-success').removeClass('has-error') && $('#divAverageSpeed').find('.good').show() && $('#divAverageSpeed').find('.error').hide()  : $('#divAverageSpeed').addClass('has-error').removeClass('has-success') && $('#divAverageSpeed').find('.error').show() && $('#divAverageSpeed').find('.good').hide();	 
		});
		
		$('#shape1').keyup(function() {
		$('#divShapeFactor').addClass('has-feedback');
		$('#shape1').val() >= 0.5 && $('#shape1').val() <=50 && $('#shape1').val() !== '' ? $('#divShapeFactor').addClass('has-success').removeClass('has-error') && $('#divShapeFactor').find('.good').show() && $('#divShapeFactor').find('.error').hide()  : $('#divShapeFactor').addClass('has-error').removeClass('has-success') && $('#divShapeFactor').find('.error').show() && $('#divShapeFactor').find('.good').hide();	 
		});
		
		$('#averageWindSpeed2').keyup(function() {
		$('#divAverageSpeed2').addClass('has-feedback');
		$('#averageWindSpeed2').val() >= 0.1 && $('#averageWindSpeed2').val() <=20 && $('#averageWindSpeed2').val() !== '' ? $('#divAverageSpeed2').addClass('has-success').removeClass('has-error') && $('#divAverageSpeed2').find('.good').show() && $('#divAverageSpeed2').find('.error').hide()  : $('#divAverageSpeed2').addClass('has-error').removeClass('has-success') && $('#divAverageSpeed2').find('.error').show() && $('#divAverageSpeed2').find('.good').hide();	 
		});
		
		$('#standardDeviation').keyup(function() {
		$('#divStdDeviation').addClass('has-feedback');
		$('#standardDeviation').val() >= 0.1 && $('#standardDeviation').val() <=50 && $('#standardDeviation').val() !== '' ? $('#divStdDeviation').addClass('has-success').removeClass('has-error') && $('#divStdDeviation').find('.good').show() && $('#divStdDeviation').find('.error').hide()  : $('#divStdDeviation').addClass('has-error').removeClass('has-success') && $('#divStdDeviation').find('.error').show() && $('#divStdDeviation').find('.good').hide();	 
		});
		
		$('#scaleFactor').keyup(function() {
		$('#divScaleFactor').addClass('has-feedback');
		$('#scaleFactor').val() >= 0.1 && $('#scaleFactor').val() <=20 && $('#scaleFactor').val() !== '' ? $('#divScaleFactor').addClass('has-success').removeClass('has-error') && $('#divScaleFactor').find('.good').show() && $('#divScaleFactor').find('.error').hide()  : $('#divScaleFactor').addClass('has-error').removeClass('has-success') && $('#divScaleFactor').find('.error').show() && $('#divScaleFactor').find('.good').hide();	 
		});
		
		$('#shape2').keyup(function() {
		$('#divShapeFactor2').addClass('has-feedback');
		$('#shape2').val() >= 0.5 && $('#shape2').val() <=5 && $('#shape2').val() !== '' ? $('#divShapeFactor2').addClass('has-success').removeClass('has-error') && $('#divShapeFactor2').find('.good').show() && $('#divShapeFactor2').find('.error').hide()  : $('#divShapeFactor2').addClass('has-error').removeClass('has-success') && $('#divShapeFactor2').find('.error').show() && $('#divShapeFactor2').find('.good').hide();	 
		});
		
		$('#ElevationOfTheMeasurement').keyup(function() {
		$('#divElevation').addClass('has-feedback');
		$('#ElevationOfTheMeasurement').val() >= -500 && $('#ElevationOfTheMeasurement').val() <=3000 && $('#ElevationOfTheMeasurement').val() !== '' ? $('#divElevation').addClass('has-success').removeClass('has-error') && $('#divElevation').find('.good').show() && $('#divElevation').find('.error').hide()  : $('#divElevation').addClass('has-error').removeClass('has-success') && $('#divElevation').find('.error').show() && $('#divElevation').find('.good').hide();
		});
		
		$('form').on('keyup', "input[id*='windProbability']", function() {
		var totalHours2 = 0;
		$('#windTable').addClass('has-feedback');
		if (windSpeed===0){
			totalHours2 = totalHours2 + parseInt($('#windProbability').val());
		}
		else {
			totalHours2 = totalHours2 + parseInt($('#windProbability').val());
			for(var j=1;j <= windSpeed;j++){
				totalHours2 = totalHours2 + parseInt($('#windProbability'+j+'').val());
			}
		}
		totalHours2 ===8760 && totalHours2 !== '' ? $('#displayWindTable').addClass('has-success').removeClass('has-error') && $('#displayWindTable').find('.good').show() && $('#displayWindTable').find('.error').hide():  $('#displayWindTable').addClass('has-error').removeClass('has-success') && $('#displayWindTable').find('.error').show() && $('#displayWindTable').find('.good').hide();
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