<?php

class Model_Turbine extends \Orm\Model
{
	protected static $_table_name = 'cse_turbines';

	protected static $_primary_key = array('turbine_id');

	protected static $_properties = array(
		'turbine_id' => array(
			'data_type' => 'int',
			'label' => '#',
			'form' => false,
		),
		'turbine_name' => array(
			'data_type'  => 'varchar',
			'label'      => 'Turbine Reference',
			'validation' => array(
				'required',
				'max_length' => array(30),
				'min_length' => array(1),
			),
			'form' => array(
				'type' => 'text',
			),
			'default' => 'My turbine ###',
		),
		'turbine_manufacturer' => array(
			'data_type' => 'varchar',
			'label' => 'Turbine Manufacturer',
			'validation' => array(
				'required',
				'max_length' => array(20),
				'min_length' => array(1),
			),
			'form' => array(
				'type' => 'text',
			),
			'default' => 'My windturbine',
		),
		'turbine_power' => array(
			'data_type'  => 'float',
			'label'      => 'Puissance nominale (en kW)',
			'validation' => array(
				'required',
				'numeric_between' => array(1, 10000),
			),
		),
		'turbine_blades' => array(
			'data_type'  => 'int',
			'label'      => 'Nombre de pales',
			'validation' => array(
				'required',
				'numeric_between' => array(1, 50),
			),
		),
		'turbine_diameter' => array(
			'data_type'  => 'int',
			'label'      => 'Diamètre du rotor (en m)',
			'validation' => array(
				'required',
				'numeric_between' => array(1, 500),
			),
		),
		'turbine_height' => array(
			'data_type'  => 'int',
			'label'      => 'Hauteur du moyeu (en m)',
			'validation' => array(
				'required',
				'numeric_between' => array(1, 300),
			),
		),
		'turbine_start_speed' => array(
			'data_type'  => 'int',
			'label'      => 'Vitesse de démarrage du rotor (en m.s<sub>-1</sub>)',
			'validation' => array(
				'required',
				'numeric_between' => array(0, 20),
			),
		),
		'turbine_stop_speed' => array(
			'data_type'  => 'int',
			'label'      => 'Vitesse d\'arrêt du rotor (en m.s<sub>-1</sub>)',
			'validation' => array(
				'required',
				'numeric_between' => array(10, 40),
			),
		),
	);

	protected static $_has_many = array(
		'powers' => array(
			'model_to' => 'Model_TurbinePower',
			'key_from' => 'turbine_id',
			'key_to' => 'turbine_id',
			'cascade_save' => true,
			'cascade_delete' => true,
		),
	);
}
