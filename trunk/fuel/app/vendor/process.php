<?php

require_once(APPPATH . '/vendor/PHPStats/Stats.php');
require_once(APPPATH . '/vendor/PHPStats/ProbabilityDistribution/ProbabilityDistribution.php');
require_once(APPPATH . '/vendor/PHPStats/ProbabilityDistribution/Weibull.php');
require_once(APPPATH . '/vendor/PHPStats/StatisticalTests.php');

use PHPStats\ProbabilityDistribution\Weibull;

//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////FONCTION DE CALCUL///////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

function occ($place)
{
	$occurence = array();
	foreach ($place->weibull as $point)
	{
		$occurence[] = array($point->wind_speed, $point->place_probability);
	}

	//Somme des occurences
	$somme_occurence=0;
	for($i=0; $i<31; $i++)
	{
		$somme_occurence=$somme_occurence+$occurence[$i][1];
	}
	echo $somme_occurence.'<br>';

	//Probabilit� de chaque vent
	$proba=array();
	for($j=0; $j<31; $j++)
	{
		$proba[$j][0]=($occurence[$j][1])/($somme_occurence);
		//echo $j .' -> '.$proba[$j][0].'<br>';
	}

	$Vm=0;
	//Calcul de la vitesse moyenne
	for($u=0; $u<31; $u++)
	{
		$proba[$u][1]=$proba[$u][0]*$occurence[$u][0];
		$Vm=$Vm+$proba[$u][1];
		//echo $u .' -> '.$proba[$u][1].'<br>';
	}

	$esperance=0;
	//Calcul de sigma
	for($v=0; $v<31; $v++)
	{
		$proba[$v][2]=$proba[$v][0]*pow($occurence[$v][0],2);
		$esperance=$esperance+$proba[$v][2];
	}
	$sigma=sqrt($esperance-pow($Vm,2));
	//echo $sigma.'<br>';

	//Calcul de k
	$k=pow(0.9874/($sigma/$Vm),1.0983);
	//echo $k.'<br>';

	//Calcul de A avec le gamma d'Euler - approximation de Stirling
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

function Vmk($Vm, $k)
{
	$X=1+(1/$k);
	$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;

	$A=$Vm/$gamma; //Facteur d'�chelle;
	
	$sigma=(0.9874*$Vm)/(exp(log($k)/1.0983));
	
	$result=array(
		'Vm' => $Vm,
		'k' => $k,
		'A' => $A,
		'Sigma' => $sigma
		);
		
	return $result;
}

function Vmsigma($Vm, $sigma)
{
	$k=pow(0.9874/($sigma/$Vm),1.0983);
	$X=1+(1/$k);
	$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;

	$A=$Vm/$gamma; //Facteur d'�chelle;
	
	$result=array(
		'Vm' => $Vm,
		'k' => $k,
		'A' => $A,
		'Sigma' => $sigma
		);
		
	return $result;
}

function Ak($k, $A)
{
	$X=1+(1/$k);
	$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;

	$Vm=$A*$gamma;

	$sigma=(0.9874*$Vm)/(exp(log($k)/1.0983));
	
	$result=array(
		'Vm' => $Vm,
		'k' => $k,
		'A' => $A,
		'Sigma' => $sigma
		);
		
	return $result;
}

function calcul($vitesse_moyenne,$k,$A)
{
//Site Brest Tableur
$output_power=array();
$output_power[0]=array(0,0);
$output_power[1]=array(1,0);
$output_power[2]=array(2,0);
$output_power[3]=array(3,0);
$output_power[4]=array(4,44.1);
$output_power[5]=array(5,135);
$output_power[6]=array(6,261);
$output_power[7]=array(7,437);
$output_power[8]=array(8,669);
$output_power[9]=array(9,957);
$output_power[10]=array(10,1279);
$output_power[11]=array(11,1590);
$output_power[12]=array(12,1823);
$output_power[13]=array(13,1945);
$output_power[14]=array(14,1988);
$output_power[15]=array(15,1998);
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
	
//Cas o� l'utilisateur rentre son tableau
//Tableau d'occurence des vents
//Colonne 0 = vitesse stabilis�e (impos�e) ; Colonne 1 = Occurence des vents
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

/*
//Dans le cas o� l'utilisateur fournit Vm et k / Vm et sigma
if($A==0)
{
//Calcul du gamma d'Euler avec l'approximation de Stirling
$X=1+(1/$k);
$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;

$A=$vitesse_moyenne/$gamma; //Facteur d'�chelle;
}
//L'utilisateur fournit A et k
elseif($A!=0)
{
//Calcul du gamma d'Euler avec l'approximation de Stirling
$X=1+(1/$k);
$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;

$vitesse_moyenne=$A*$gamma;

$sigma=(0.9874*$vitesse_moyenne)/(exp(log($k)/1.0983));
}
*/


//Valeurs r�cup�r�es
$temp_kelvin=$temp_celsius+273.15;
$surface=(pi()*pow($diametre,2))/4;


$production=array();
$production[0][0]=0;
$production[0][1]=0;
$production[0][2]=0;
$production[0][3]=0;
$production[0][4]=0;
//Calcul de Weibull avec A non extrapol� / Weibull � l'altitude de mesure du vent
$microtime = microtime(true);

$Weibull = new Weibull($A, $k);

for($j=0;$j<=30;$j++)
{	
	$production[$j][0]=$j;
	$production[$j][1]=$Weibull->pdf($output_power[$j][0]);
}

$X=1+(1/$k);
$gamma=((pow($X,$X-0.5))*(exp(-$X))*(sqrt(2*pi()))*(1+(1/(12*$X))+(1/(288*pow($X,2)))-(139/(51840*(pow($X,3))))-(571/(2488320*(pow($X,4))))+(163879/(209018880*(pow($X,5)))))); //Gamma d'Euler;


//Extrapolation de la vitesse moyenne et d�duction d'un nouveau A
$Vm_extrapol=$vitesse_moyenne*(log($hauteur_eolienne/$rugosite)/log($hauteur/$rugosite));
$A1=$Vm_extrapol/$gamma;

//Calcul d'une nouvelle Weibull avec le nouveau A (A1)
$Weibull1 = new Weibull($A1, $k);
for($j=0;$j<=30;$j++)
{	
	$production[$j][2]=$Weibull1->pdf($output_power[$j][0]);
}

/*
//Calcul de la production totale sur l'ann�e
	//Nombre d'heures o� la vitesse v est observ�e
	for($h=0;$h<31;$h++)
	{
		$production[$h][3]=$production[$h][2]*8760;
		//echo $tableau3[$h][1].'<br/>';
	}

	//Energie produite par l'�olienne
	for($v=0;$v<31;$v++)
	{
		$production[$v][4]=$production[$v][3]*$output_power[$v][1];
		//echo $tableau3[$v][2].'<br/>';
	}

	//Calcul de la production totale sur l'ann�e
	$production_totale_annee=0;
	for($u=0; $u<31; $u++)
	{
		$production_totale_annee=$production_totale_annee+$production[$u][4];
	}
	//echo $production_totale_annee.'<br/>';

//Calcul du facteur de charge
$facteur_charge=$production_totale_annee/(8760*$puissance_nominale);
//echo $facteur_charge.'<br/>';
*/

//Calcul de la vitesse de vent d�livrant la densit� maximale de puissance en entr�e de l'�olienne
$Vmax=$A1*(pow(($k+2)/$k,1/$k));
//echo $Vmax.'<br/>';

//Calcul de la puissance moyenne

	//$puissance_moyenne=$production_totale_annee/8760;
	//echo $puissance_moyenne.'<br/>';

	//Calcul de la densit� de l'air
	$h1=$hauteur_eolienne+$hauteur_site; //hauteur du rotor par rapport � la hauteur de r�f�rence
	$T_rotor_kelvin=$temp_kelvin-($h1*0.0065); //Tref mer(15 �C)-(h1*grad de temp vertical)
	$pression_rotor=101325*(pow(($T_rotor_kelvin/$temp_kelvin),(9.81/(287.04*0.0065))));//Pref mer * (T_rotor_kelvin/Tref mer)^(g/R*grad temp)
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
		//Vitesse du vent par pas de 0.1 m/s
		$density[$w][0]=$density[$w-1][0]+0.1;
		//echo $density[$w][0].'<br/>';
	
		//Distribution de Weibull sur les param�tres A1 et k et la variable vitesse du vent par pas de 0.1
		$density[$w][2]=$Weibull1->pdf($density[$w][0]);
		//echo $density[$w][2].'<br/>';
	
		//Densit� de puissance du vent en entr�e par m� de rotor
		$density[$w][3]=0.5*$rho*pow($density[$w][0],3);
		//echo $density[$w][3].'<br>';
		
		//Densit� de puissance en entr�e r�duite � la limite de Betz
		$density[$w][6]=$density[$w][3]*(16/27);
		$tampon[$w][4]=$density[$w][6]*$density[$w][2];
		
		//Densit� moyenne de la puissance d'entr�e du vent
		$density[$w][4]=$density[$w][2]*$density[$w][3];
		$somme_densite_entree=$somme_densite_entree+$density[$w][4];
		$densite_moy_entree=$somme_densite_entree/10;
		//echo $densite_moy_entree.'<br>';
		
		//Interpolation de la courbe de puissance de l'�olienne en fonction de la vitesse du vent par pas de 0.1 m/s
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
		
		//Calcul de la production totale sur l'ann�e
		//Nombre d'heures o� la vitesse v est observ�e
			$energy[$w][3]=$density[$w][2]*8760;
			//echo $tableau3[$h][1].'<br/>';

		//Energie produite par l'�olienne
			$energy[$w][4]=$energy[$w][3]*$tampon[$w][2];
			//echo $tableau3[$v][2].'<br/>';

		//Calcul de la production totale sur l'ann�e
			$production_totale_annee=$production_totale_annee+$energy[$w][4];
			$production_totale_annee1=$production_totale_annee/10;
		//echo $production_totale_annee.'<br/>';
	
		//Coefficient de puissance
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
		
		//Etablir le coefficient de puissance + Nombre d'heures o� la vitesse v est observ�e + Energie produite par l'�olienne dans un tableau de 0 � 30 au pas de 1 m/s
		if(is_int($w/10)==true)
		{
			$coef_puissance[$w/10][0]=$tampon[$w][0];
			$production[$w/10][3]=$energy[$w][3];
			$production[$w/10][4]=$energy[$w][4];
		}
		
		//Densit� de puissance en sortie d'�olienne par m� de rotor
		$density[$w/10][7]=($density[$w/10][5]*$density[$w][3]);
		$tampon[$w][1]=$density[$w/10][7];
		
		//Densit� moyenne de la puissance de sortie
		$tampon[$w][3]=$tampon[$w][1]*$density[$w][2];
		$somme_densite_sortie=$somme_densite_sortie+$tampon[$w][3];
		$densite_moy_sortie=$somme_densite_sortie/10;
	}
	
	//echo $production_totale_annee1.'<br/>';	
	
	$puissance_moyenne=$production_totale_annee1/8760;
	//echo $puissance_moyenne.'<br/>';
	
	//Calcul du facteur de charge
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

	return $array;
}

return;

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
	$Vm=5; //On r�cup�re la vitesse moyenne de l'utilisateur
	$k=2.0224; //On r�cup�re k de l'utilisateur
	//Si k n'est pas entr�, on impose sa valeur � 2
	$A=0;
	
	calcul($Vm,$k,$A);
	
break;

//L'utilisateur fournit Vm et sigma
case 2:
	$Vm=5; //On r�cup�re la vitesse moyenne de l'utilisateur
	$sigma=2.599990559; //On r�cup�re sigma de l'utilisateur
	$k=pow(0.9874/($sigma/$Vm),1.0983);
	$A=0;
	
	calcul($Vm,$k,$A);
	
break;

//L'utilisateur fournit A et k
case 3:
	$k=2.0224; //On r�cup�re k de l'utilisateur
	//Si k n'est pas entr�, on impose sa valeur � 2
	$A=5.6428566796076; //On r�cup�re A de l'utilisateur
	$Vm=0;
	
	calcul($Vm,$k,$A);
	
break;
}
