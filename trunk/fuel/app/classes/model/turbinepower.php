<?php

class Model_TurbinePower extends \Orm\Model
{
	protected static $_table_name = 'cse_turbine_powers';

//	protected static $_primary_key = array('turbine_id', 'wind_speed');
//	protected static $_primary_key = array('wind_speed');
	protected static $_primary_key = array('turbine_power_id');

	protected static $_properties = array(
		'turbine_power_id' => array(
			'data_type' => 'int',
			'label' => '#',
			'validation' => array(
				'required',
			),
			'form' => false,
		),
		'turbine_id' => array(
			'data_type' => 'int',
			'label' => 'Turbine ID',
			'validation' => array(
				'required',
			),
			'form' => false,
		),
		'wind_speed' => array(
			'data_type' => 'int',
			'label' => 'Vitesse du vent (m.s<sup>-1</sup>',
			'validation' => array(
				'required',
			),
			'form' => array(
				'type' => 'text',
			),
			'default' => '0.00',
		),
		'turbine_power' => array(
			'data_type' => 'int',
			'label' => 'Puissance (en kW)',
			'validation' => array(
				'required',
			),
			'form' => array(
				'type' => 'text'
			),
			'default' => '0.00',
		),
	);

	/*
	protected static $_belongs_to = array(
		'turbine' => array(
			'model_to' => 'Model_Turbine',
			'key_from' => 'turbine_id',
			'key_to' => 'turbine_id',
			'cascade_save' => false,
			'cascade_delete' => false,
		),
	);
	//*/
}
