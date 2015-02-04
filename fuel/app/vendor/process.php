<?php

require_once(APPPATH . '/vendor/PHPStats/Stats.php');
require_once(APPPATH . '/vendor/PHPStats/ProbabilityDistribution/ProbabilityDistribution.php');
require_once(APPPATH . '/vendor/PHPStats/ProbabilityDistribution/Weibull.php');
require_once(APPPATH . '/vendor/PHPStats/StatisticalTests.php');

use PHPStats\ProbabilityDistribution\Weibull;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////CALCUL FONCTION///////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

//If the user enters the frequencies of the stabilised speed
function occ($place)
{
	$occurence = array();
	foreach ($place->weibull as $point)
	{
		$occurence[] = array($point->wind_speed, $point->place_probability);
	}

	//Frequencies sum
	$somme_occurence=0;
	for($i=0; $i<31; $i++)
	{
		$somme_occurence=$somme_occurence+$occurence[$i][1];
	}
	echo $somme_occurence.'<br>';

	//Probability of each wind
	$proba=array();
	for($j=0; $j<31; $j++)
	{
		$proba[$j][0]=($occurence[$j][1])/($somme_occurence);
		//echo $j .' -> '.$proba[$j][0].'<br>';
	}

	$Vm=0;
	//Calcul of the mean speed
	for($u=0; $u<31; $u++)
	{
		$proba[$u][1]=$proba[$u][0]*$occurence[$u][0];
		$Vm=$Vm+$proba[$u][1];
		//echo $u .' -> '.$proba[$u][1].'<br>';
	}

	$esperance=0;
	//Calcul of sigma
	for($v=0; $v<31; $v++)
	{
		$proba[$v][2]=$proba[$v][0]*pow($occurence[$v][0],2);
		$esperance=$esperance+$proba[$v][2];
	}
	$sigma=sqrt($esperance-pow($Vm,2));
	//echo $sigma.'<br>';

	//Calcul of k (shape factor)
	$k=pow(0.9874/($sigma/$Vm),1.0983);
	//echo $k.'<br>';

	//Calcul of A (scale factor) with the gamma d'Euler - approximation of Stirling
	$X=1+(1/$k);
	$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;

	$A=$Vm/$gamma;
	//echo $A.'<br>';
	
	$sigma=(0.9874*$Vm)/(exp(log($k)/1.0983));
	
	$result=array(
		'Vm' => $Vm,
		'k' => $k,
		'A' => $A,
		'Sigma' => $sigma
		);
		
	return $result;
}

//if the user gives the mean speed Vm and the shape factor k
function Vmk($Vm, $k)
{
	//Calcul of the gamma of euler with Stirling approximation
	$X=1+(1/$k);
	$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;

	$A=$Vm/$gamma; //scale factor;
	
	$sigma=(0.9874*$Vm)/(exp(log($k)/1.0983));
	
	$result=array(
		'Vm' => $Vm,
		'k' => $k,
		'A' => $A,
		'Sigma' => $sigma
		);
		
	return $result;
}

//If the user gives the mean speed and sigma
function Vmsigma($Vm, $sigma)
{
	//Calcul of the shape factor
	$k=pow(0.9874/($sigma/$Vm),1.0983);
	
	//Calcul of the gamma of euler with Stirling approximation
	$X=1+(1/$k);
	$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;

	$A=$Vm/$gamma; //Scale factor;
	
	$result=array(
		'Vm' => $Vm,
		'k' => $k,
		'A' => $A,
		'Sigma' => $sigma
		);
		
	return $result;
}

//If the user gives the scale factor A and the shape factor k
function Ak($k, $A)
{
	//Calcul of the gamma of euler with Stirling approximation
	$X=1+(1/$k);
	$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;

	$Vm=$A*$gamma;//Mean speed;

	$sigma=(0.9874*$Vm)/(exp(log($k)/1.0983));
	
	$result=array(
		'Vm' => $Vm,
		'k' => $k,
		'A' => $A,
		'Sigma' => $sigma
		);
		
	return $result;
}


function _calcul($place, $turbine)
{
	//Datas give by the user
	$vitesse_moyenne = $place->place_mean_speed;
	$k = $place->place_shape_factor;
	$A = $place->place_scale_factor;
	$output_power = array();
	foreach ($turbine->powers as $power) $output_power[] = array($power->wind_speed, $power->turbine_power);
	$temp_celsius = $place->place_mean_temp;
	$hauteur_eolienne = $turbine->turbine_height;
	$puissance_nominale = $turbine->turbine_power;
	$diametre = $turbine->turbine_diameter;
	$rugosite = $place->place_rugosity;
	$hauteur = $place->place_altitude_meas;
	$hauteur_site = $place->place_altitude;

	if ($k == null)
	{
		$k=pow(0.9874/($place->place_std_deviation/$vitesse_moyenne),1.0983);
	}


	//Calcul of the temperature in kelvin and of the surface
	$temp_kelvin=$temp_celsius+273.15;
	$surface=(pi()*pow($diametre,2))/4;


	$production=array();
	$production[0][0]=0;
	$production[0][1]=0;
	$production[0][2]=0;
	$production[0][3]=0;
	$production[0][4]=0;
	
	//Calcul of Weibull with a scale factor A not extrapolated / Weibull at the height of measure of wind
	$microtime = microtime(true);

	$Weibull = new Weibull($A, $k);

	for($j=0;$j<=30;$j++)
	{	
		$production[$j][0]=$j;
		$production[$j][1]=$Weibull->pdf($output_power[$j][0]);
	}

	//Calcul of the gamma of euler with Stirling approximation
	$X=1+(1/$k);
	$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;


	//Vertical extrapolation of the mean speed and deduction of a new scale factor A
	$Vm_extrapol=$vitesse_moyenne*(log($hauteur_eolienne/$rugosite)/log($hauteur/$rugosite));
	$A1=$Vm_extrapol/$gamma;

	//Calcul of a new Weibull with the new scale factor A (A1)
	$Weibull1 = new Weibull($A1, $k);
	for($j=0;$j<=30;$j++)
	{	
		$production[$j][2]=$Weibull1->pdf($output_power[$j][0]);
	}

	//Calcul of the speed of wind which gives the maximal entry power density of the wind turbine
	$Vmax=$A1*(pow(($k+2)/$k,1/$k));
	//echo $Vmax.'<br/>';

	
	//Calcul of the air density
	$h1=$hauteur_eolienne+$hauteur_site; //Height of the rotor by report with the reference height
	$T_rotor_kelvin=$temp_kelvin-($h1*0.0065); 
	$pression_rotor=101325*(pow(($T_rotor_kelvin/$temp_kelvin),(9.81/(287.04*0.0065))));
	$rho=$pression_rotor/(287.04*$T_rotor_kelvin);
	//echo $rho.'<br/>';
	
	$energy=array();
	$energy[0][0]=0;
	$energy[0][1]=0;
	$energy[0][2]=0;
	$energy[0][3]=0;
	$energy[0][4]=0;
	
	$density=array();
	$density[0][0]=0;
	$density[0][1]=$output_power[0][1];
	$density[0][2]=$Weibull1->pdf($density[0][0]);
	$density[0][3]=0.5*$rho*pow($density[0][0],3);
	$density[0][4]=$density[0][2]*$density[0][3];
	$density[0][5]=0;
	$density[0][6]=$density[0][3]*(16/27);
	$density[0][7]=$density[0][3]*$density[0][5];
	$density[0][8]=0;

	$tampon=array();
	$tampon[0][0]=0;
	$tampon[0][1]=0;
	$tampon[0][2]=$output_power[0][1];
	$tampon[0][3]=0;
	$tampon[0][4]=0;

	$coef_puissance=array();
	$coef_puissance[0][0]=0;
	
	$somme_densite_entree=0;
	$somme_densite_sortie=0;
        $production_totale_annee=0;

	for($w=1; $w<301; $w++)
	{
		//Wind speed with a 0.1 m/s step
		$density[$w][0]=$density[$w-1][0]+0.1;
		//echo $density[$w][0].'<br/>';
		
		//Weibull distribution with A1 and k parameters and the wind speed with a 0.1 m/s step variable
		$density[$w][2]=$Weibull1->pdf($density[$w][0]);
		//echo $density[$w][2].'<br/>';
	
		//Entry power density by m2 of rotor
		$density[$w][3]=0.5*$rho*pow($density[$w][0],3);
		//echo $density[$w][3].'<br>';
		
		//Entry power density with the Betz limit
		$density[$w][6]=$density[$w][3]*(16/27);
		$tampon[$w][4]=$density[$w][6]*$density[$w][2];
		
		//Mean entry power density 
		$density[$w][4]=$density[$w][2]*$density[$w][3];
		$somme_densite_entree=$somme_densite_entree+$density[$w][4];
		$densite_moy_entree=$somme_densite_entree/10;
		//echo $densite_moy_entree.'<br>';
		
		//Interpolation de la courbe de puissance de l'�olienne en fonction de la vitesse du vent par pas de 0.1 m/s
		//Interpolation of the power curve of the wind turbine on the basis of the wind speed of the 0.1 m/s step
		if(is_int($w/10)==true)
		{
			$density[$w/10][1]=$output_power[$w/10][1];
			$tampon[$w][2]=$density[$w/10][1];
		}
		else
		{
			$density[$w/10][1]=($density[($w/10)-0.1][1])+(((($output_power[(integer)(($w/10)+1)][1]))-($output_power[(integer)($w/10)][1]))/10);
			$tampon[$w][2]=$density[$w/10][1];
		}
		
		if($w>250 AND $w<301)
		{
			$tampon[$w][2]=0;
		}
		
		//Number of hours where the speed is observed
			$energy[$w][3]=$density[$w][2]*8760;
			//echo $tableau3[$h][1].'<br/>';

		//Energy producted by the wind turbine
			$energy[$w][4]=$energy[$w][3]*$tampon[$w][2];
			//echo $tableau3[$v][2].'<br/>';

		//Calcul of the total production on the year
			$production_totale_annee=$production_totale_annee+$energy[$w][4];
			$production_totale_annee1=$production_totale_annee/10;
		//echo $production_totale_annee.'<br/>';
	
		//Power coefficient
		if((0.5*$rho*pow($density[$w][0],3)*$surface)!=0)
		{
			//$density[$w/10][5]=(1000*$density[$w/10][1])/(0.5*$rho*pow($density[$w][0],3)*$surface);
			$density[$w/10][5]=(1000*$tampon[$w][2])/(0.5*$rho*pow($density[$w][0],3)*$surface);
			$tampon[$w][0]=$density[$w/10][5];
			if($density[$w/10][5]>=0.59)
			{
				$density[$w/10][5]=0.59;
				$tampon[$w][0]=$density[$w/10][5];
			}
		}
		else
		{
			$density[$w/10][5]=0;
			$tampon[$w][0]=0;
		}
		
		//Giving the power coefficient + Number of hours where the speed is observed + Energy producted by the wind turbine in a matrix from 0 to 30 m/s with a step of 1 m/s
		if(is_int($w/10)==true)
		{
			$coef_puissance[$w/10][0]=$tampon[$w][0];
			$production[$w/10][3]=$energy[$w][3];
			$production[$w/10][4]=$energy[$w][4];
		}
		
		//Output power density by m2 of rotor
		$density[$w/10][7]=($density[$w/10][5]*$density[$w][3]);
		$tampon[$w][1]=$density[$w/10][7];
		
		//Mean output power density 
		$tampon[$w][3]=$tampon[$w][1]*$density[$w][2];
		$somme_densite_sortie=$somme_densite_sortie+$tampon[$w][3];
		$densite_moy_sortie=$somme_densite_sortie/10;
	}
	
	//echo $production_totale_annee1.'<br/>';	
	
	//Calcul of the mean power
	$puissance_moyenne=$production_totale_annee1/8760;
	//echo $puissance_moyenne.'<br/>';
	
	//Calcul of load factor
	$facteur_charge=$production_totale_annee1/(8760*$puissance_nominale);
	//echo $facteur_charge.'<br/>';	

	$puissance_moy_entree = $densite_moy_entree * $surface;


	$result = array();

	$array['density_mean_input'] = $densite_moy_entree;
	$array['power_mean_input'] = $puissance_moy_entree;
	$array['max_wind_speed'] = $Vmax;
	$array['moyeu_mean_speed'] = $Vm_extrapol;

	$array['density_mean_output'] = $densite_moy_sortie;

//	$array['mean_speed'] = $vitesse_moyenne;
//	$array['power_output'] = $production[$v][4];
	$array['production'] = $production_totale_annee1;
	$array['power_mean'] = $puissance_moyenne;
	$array['charge_factor'] = $facteur_charge;

	$array['weibull'] = array();
	$array['weibull_measure'] = array();
	$array['weibull_moyeu'] = array();
	for ($i = 0; $i <= 30; $i++)
	{
		$array['weibull_measure'][] = $production[$i][1];
		$array['weibull_moyeu'][] = $production[$i][2];
	}

	$array['turbine_power'] = array();
	$array['cp'] = array();
	for ($i = 0; $i <= 30; $i++)
	{
		$array['turbine_power'][] = $output_power[$i][1];
		$array['cp'][] = $coef_puissance[$i][0];
	}

	$array['production_power'] = array();
	for ($i = 0; $i <= 30; $i++)
	{
		$array['production_power'][] = $production[$i][4];
	}

	$array['density_input'] = array();
	$array['density_output'] = array();
	for ($i = 0; $i <= 300; $i++)
	{
		$array['density_input'][] = $density[$i][4];
		$array['density_input_betz'][] = $tampon[$i][4];
		$array['density_output'][] = $tampon[$i][3];
	}
        //recuperation of the name of the site and the name of the wind turbine to display it on the results page
        $array['place_name'] = $place->place_name;
        $array['turbine_name'] = $turbine->turbine_manufacturer.' '.$turbine->turbine_name;

	return $array;
}


