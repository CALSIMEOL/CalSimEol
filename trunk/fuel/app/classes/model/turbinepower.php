<?php

class Model_TurbinePower extends \Orm\Model
{
	protected static $_table_name = 'cse_turbine_powers';

	protected static $_primary_key = array('turbine_power_id');

	protected static $_conditions = array(
		'order_by' => array('wind_speed' => 'asc'),
	);

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
			'data_type' => 'float',
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
			'data_type' => 'float',
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
}
