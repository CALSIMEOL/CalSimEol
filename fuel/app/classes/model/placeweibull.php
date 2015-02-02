<?php

class Model_PlaceWeibull extends \Orm\Model
{
	protected static $_table_name = 'cse_place_weibull';

	protected static $_primary_key = array('place_weibull_id');

	protected static $_conditions = array(
		'order_by' => array('wind_speed' => 'asc'),
	);

	protected static $_properties = array(
		'place_weibull_id' => array(
			'data_type' => 'int',
			'label' => '#',
			'validation' => array(
				'required',
			),
			'form' => false,
		),
		'place_id' => array(
			'data_type' => 'int',
			'label' => 'Place ID',
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
		'place_probability' => array(
			'data_type' => 'float',
			'label' => 'Probabilité',
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
