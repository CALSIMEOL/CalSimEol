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
			'label'      => 'Turbine Name',
			'validation' => array(
				'required',
				'max_length' => array(255),
				'min_length' => array(1),
			),
			'form' => array(
				'type' => 'text',
			),
			'default' => 'My turbine ###',
		),
		'turbine_power' => array(
			'data_type'  => 'float',
			'label'      => 'Puissance nominale (en kW)',
			'validation' => array(
				'required',
				'numeric_min' => array(0),
			),
		),
		'turbine_blades' => array(
			'data_type'  => 'int',
			'label'      => 'Nombre de pales',
			'validation' => array(
				'required',
				'numeric_min' => array(0),
			),
		),
		'turbine_diameter' => array(
			'data_type'  => 'int',
			'label'      => 'Diamètre du rotor (en m)',
			'validation' => array(
				'required',
				'numeric_min' => array(0),
			),
		),
		'turbine_height' => array(
			'data_type'  => 'int',
			'label'      => 'Hauteur du moyeu (en m)',
			'validation' => array(
				'required',
				'numeric_min' => array(0),
			),
		),
		'turbine_start_speed' => array(
			'data_type'  => 'int',
			'label'      => 'Vitesse de démarrage du rotor (en m.s<sub>-1</sub>)',
			'validation' => array(
				'required',
				'numeric_min' => array(0),
			),
		),
		'turbine_stop_speed' => array(
			'data_type'  => 'int',
			'label'      => 'Vitesse d\'arrêt du rotor (en m.s<sub>-1</sub>)',
			'validation' => array(
				'required',
				'numeric_min' => array(0),
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
