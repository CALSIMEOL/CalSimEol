<?php

require_once(APPPATH . '/vendor/PHPStats/Stats.php');
require_once(APPPATH . '/vendor/PHPStats/ProbabilityDistribution/ProbabilityDistribution.php');
require_once(APPPATH . '/vendor/PHPStats/ProbabilityDistribution/Weibull.php');
require_once(APPPATH . '/vendor/PHPStats/StatisticalTests.php');

use PHPStats\ProbabilityDistribution\Weibull;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////FONCTION DE CALCUL///////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function calcul($vitesse_moyenne,$k,$A)
{
	$output_power=array();
	$output_power[0]=array(0,0);
	$output_power[1]=array(1,0);
	$output_power[2]=array(2,0);
	$output_power[3]=array(3,0);
	$output_power[4]=array(4,66);
	$output_power[5]=array(5,166);
	$output_power[6]=array(6,288);
	$output_power[7]=array(7,473);
	$output_power[8]=array(8,709);
	$output_power[9]=array(9,1000);
	$output_power[10]=array(10,1316);
	$output_power[11]=array(11,1651);
	$output_power[12]=array(12,1860);
	$output_power[13]=array(13,1968);
	$output_power[14]=array(14,2000);
	$output_power[15]=array(15,2000);
	$output_power[16]=array(16,2000);
	$output_power[17]=array(17,2000);
	$output_power[18]=array(18,2000);
	$output_power[19]=array(19,2000);
	$output_power[20]=array(20,2000);
	$output_power[21]=array(21,2000);
	$output_power[22]=array(22,2000);
	$output_power[23]=array(23,2000);
	$output_power[24]=array(24,2000);
	$output_power[25]=array(25,2000);
	$output_power[26]=array(26,0);
	$output_power[27]=array(27,0);
	$output_power[28]=array(28,0);
	$output_power[29]=array(29,0);
	$output_power[30]=array(30,0);

	$temp_celsius=15;
	$hauteur_eolienne=80;
	$puissance_nominale=2000;
	$diametre=80;

	$place = Model_Place::find(1);

	$turbine = Model_Turbine::find(1);

	_calcul($place, $turbine);
}

function _calcul($place, $turbine)
{
	$vitesse_moyenne = $place->place_mean_speed;
	$k = $place->place_shape_factor;
	$A = $place->place_scale_factor;
	$output_power = array();
	foreach ($turbine->powers as $power) $output_power[$power->wind_speed] = $turbine->turbine_power;
	$temp_celsius = $place->place_mean_temp;
	$hauteur_eolienne = $turbine->turbine_height;
	$puissance_nominale = $turbine->turbine_power;
	$diametre = $turbine->turbine_diameter;
	$rugosite = $place->place_rugosity;
	$hauteur = $place->place_altitude_meas;
//$vitesse_moyenne, $k, $A, $output_power, $temp_celsius, $hauteur_eolienne, $puissance_nominale, $diametre, $rugosite, $hauteur
//Tableau de puissance de sortie de l'éolienne (récupérée bdd Tom) ; Vitesse stabilisée (0 à 30) imposée
//Colonne 0 = vitesse stabilisée ; Colonne 1 = puissance de sortie
//Simulation d'un tableau

//Cas où l'utilisateur rentre son tableau
//Tableau d'occurence des vents
//Colonne 0 = vitesse stabilisée (imposée) ; Colonne 1 = Occurence des vents
//Simulation d'un tableau

/*
$tableau2=array();
$tableau2[0]=array(50,0);
$tableau2[1]=array(52,1);
$tableau2[2]=array(54,2);
$tableau2[3]=array(56,3);
$tableau2[4]=array(58,4);
$tableau2[5]=array(60,5);
$tableau2[6]=array(62,6);
$tableau2[7]=array(64,7);
$tableau2[8]=array(66,8);
$tableau2[9]=array(68,9);
$tableau2[10]=array(70,10);
$tableau2[11]=array(72,11);
$tableau2[12]=array(74,12);
$tableau2[13]=array(76,13);
$tableau2[14]=array(78,14);
$tableau2[15]=array(80,15);
$tableau2[16]=array(82,16);
$tableau2[17]=array(84,17);
$tableau2[18]=array(86,18);
$tableau2[19]=array(88,19);
$tableau2[20]=array(90,20);
$tableau2[21]=array(92,21);
$tableau2[22]=array(94,22);
$tableau2[23]=array(96,23);
$tableau2[24]=array(98,24);
$tableau2[25]=array(100,25);
$tableau2[26]=array(102,26);
$tableau2[27]=array(104,27);
$tableau2[28]=array(106,28);
$tableau2[29]=array(108,29);
$tableau2[30]=array(110,30);
*/

//Dans le cas où l'utilisateur fournit Vm et k / Vm et sigma
if($A==0)
{
//Calcul du gamma d'Euler avec l'approximation de Stirling
$X=1+(1/$k);
$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;

$A=$vitesse_moyenne/$gamma; //Facteur d'échelle;
}

elseif($A!=0)
{
//Calcul du gamma d'Euler avec l'approximation de Stirling
$X=1+(1/$k);
$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;

$vitesse_moyenne=$A*$gamma;

$sigma=(0.9874*$vitesse_moyenne)/(exp(log($k)/1.0983));
}

//Valeurs récupérées
$temp_kelvin=$temp_celsius+273.15;
$surface=(pi()*pow($diametre,2))/4;
$rho=((pow(((288-0.0065*$hauteur_eolienne)/288),5.225))*1013*28.97)/(8.314*$temp_kelvin);
//$rho1=1.225652;


$production=array();
//Distribution de Weibull avec les paramètre A et k sur la variable Vitesse stabilisée
$microtime = microtime(true);

$Weibull = new Weibull($A, $k);
	
//Weibull à l'altitude de mesure du vent
for($j=0;$j<30;$j++)
{	
	$production[$j][0]=$j;
	$production[$j][1]=$Weibull->pdf($output_power[$j][0]);
}

//Extrapolation verticale de la vitesse moyenne
//hauteur = altitude de mesure du vent ; hauteur et rugosité récupérée de l'utilisateur
$Vm_extrapol=$vitesse_moyenne+(log($hauteur_eolienne/$rugosite)/log($hauteur/$rugosite));
$A1=$Vm_extrapol/$gamma;
//Calcul d'une nouvelle Weibull avec le nouveau A
$Weibull1 = new Weibull($A1, $k);
for($j=0;$j<30;$j++)
{	
	$production[$j][2]=$Weibull1->pdf($output_power[$j][0]);
}

//Nombre d'heures où la vitesse v est observée
for($h=0;$h<30;$h++)
{
	$production[$h][3]=$production[$h][2]*8760;
	//echo $tableau3[$h][1].'<br/>';
}

//Energie produite par l'éolienne
for($v=0;$v<30;$v++)
{
	$production[$v][4]=$production[$v][3]*$output_power[$v][1];
	//echo $tableau3[$v][2].'<br/>';
}

//Calcul de la production totale sur l'année
$production_totale_annee=0;
for($u=0; $u<30; $u++)
{
	$production_totale_annee=$production_totale_annee+$production[$u][4];
}

//echo $production_totale_annee.'<br/>';

//Calcul de la puissance moyenne
$puissance_moyenne=$production_totale_annee/8760;
//echo $puissance_moyenne.'<br/>';

//Calcul du facteur de charge
$facteur_charge=$production_totale_annee/(8760*$puissance_nominale);
//echo $facteur_charge.'<br/>';


//Vitesse du vent par pas de 0.1 m/s
$density=array();
$density[0][0]=0;
$density[0][2]=$Weibull1->pdf($density[0][0]);
$density[0][3]=0.5*$rho*pow($density[0][0],3)*$density[0][2];
$density[0][1]=$output_power[0][1];

$tampon=array();
$tampon[0][0]=0;
$tampon[0][1]=0;

for($w=1; $w<301; $w++)
{
	//Vitesse du vent par pas de 0.1 m/s
	$density[$w][0]=$density[$w-1][0]+0.1;
	//echo $tableau4[$w][0].'<br/>';
	
	//Distribution de Weibull sur les paramètres A et k et la variable vitesse du vent par pas de 0.1
	$density[$w][2]=$Weibull1->pdf($density[$w][0]);
	//echo $tableau4[$w][2].'<br/>';
	
	//Densité de puissance du vent en entrée par m² de rotor
	$density[$w][3]=0.5*$rho*pow($density[$w][0],3)*$density[$w][2];
	//echo $tableau4[$w][3].'<br>';
	
	//Interpolation de la courbe de puissance de l'éolienne en fonction de la vitesse du vent par pas de 0.1 m/s
	if(is_int($w/10)==true)
	{
		$density[$w/10][1]=$output_power[$w/10][1];
		//echo $tableau4[$w/10][1].'<br/>';
	}
	else
	{
		$density[$w/10][1]=($density[($w/10)-0.1][1])+(((($output_power[(integer)(($w/10)+1)][1]))-($output_power[(integer)($w/10)][1]))/10);
		//echo $tableau4[($w/10)][1].'<br/>';
		//echo $tableau1[$w/10][1].'<br/>';
	}
	
	//echo $w/10 .' -> '.$tableau4[$w/10][1].'<br/>';
	//echo $w/10 .' -> '.$tableau4[$w/10][1].'  '.$tableau4[($w/10)-0.1][1].'  '.$tableau1[(integer)(($w/10)+1)][1].'  '.$tableau1[(integer)($w/10)][1].'<br/>';
	
	
	//Coefficient de puissance
	if((0.5*$rho*pow($density[$w][0],3)*$surface)!=0)
	{
		$density[$w/10][5]=(1000*$density[$w/10][1])/(0.5*$rho*pow($density[$w][0],3)*$surface);
		$tampon[$w][0]=$density[$w/10][5];
	}
	else
	{
		$density[$w/10][5]=0;
		$tampon[$w][0]=0;
	}
	//echo $w/10 .' -> '.$tableau4[$w/10][5].'<br>';
	//echo $w/10 .' -> '.$tableau5[$w][0].'<br>';
		
	//Densité de puissance en sortie d'éolienne par m² de rotor
	$density[$w/10][6]=($density[$w/10][5]*$density[$w][3]);
	$tampon[$w][1]=$density[$w/10][6];
	//echo $w/10 .' -> '.$tableau4[$w/10][6].'<br>';
}

for($y=0; $y<301; $y++)
{
	//echo $y/10 .' -> '.$tableau5[$y][1].'<br>';
	//echo $y/10 .' -> '.$tableau5[$y][0].'<br>';
}

	return $production_totale_annee;
}

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////SI L'UTILISATEUR RENTRE UN SITE//////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////


$choice=1;

switch($choice)
{
//L'utilisateur fournit Vm et k
case 1:
	$Vm=5; //On récupère la vitesse moyenne de l'utilisateur
	$k=2.0224; //On récupère k de l'utilisateur
	//Si k n'est pas entré, on impose sa valeur à 2
	$A=0;
	
	calcul($Vm,$k,$A);
	
break;

//L'utilisateur fournit Vm et sigma
case 2:
	$Vm=5; //On récupère la vitesse moyenne de l'utilisateur
	$sigma=2.599990559; //On récupère sigma de l'utilisateur
	$k=pow(0.9874/($sigma/$Vm),1.0983);
	$A=0;
	
	calcul($Vm,$k,$A);
	
break;

//L'utilisateur fournit A et k
case 3:
	$k=2.0224; //On récupère k de l'utilisateur
	//Si k n'est pas entré, on impose sa valeur à 2
	$A=5.6428566796076; //On récupère A de l'utilisateur
	$Vm=0;
	
	calcul($Vm,$k,$A);
	
break;
}
