<?php

class Model_Place extends \Orm\Model
{
	protected static $_table_name = 'cse_places';

	protected static $_primary_key = array('place_id');

	protected static $_properties = array(
		'place_id' => array(
			'data_type' => 'int',
			'label' => '#',
			'form' => false,
		),
		'place_name' => array(
			'data_type'  => 'varchar',
			'label'      => 'Place Name',
			'validation' => array(
				'required',
				'max_length' => array(255),
				'min_length' => array(1),
			),
			'form' => array(
				'type' => 'text',
			),
			'default' => 'My place ###',
		),
		'place_longitude' => array(
			'data_type'  => 'float',
			'label'      => 'Place Longitude (in degrees)',
			'validation' => array(
				'required',
				'numeric_min' => array(0),
			),
		),
		'place_latitude' => array(
			'data_type'  => 'float',
			'label'      => 'Place Latitude (in degrees)',
			'validation' => array(
				'required',
				'numeric_min' => array(0),
			),
		),
		'place_altitude' => array(
			'data_type'  => 'int',
			'label'      => 'Place Altitude (in meters)',
			'validation' => array(
				'required',
				'numeric_min' => array(0),
			),
		),
		'place_mean_temp' => array(
			'data_type'  => 'float',
			'label'      => 'Place Temp (in degrees celcius)',
			'validation' => array(
				'required',
//				'numeric_min' => array(0),
			),
		),
		'place_rugosity' => array(
			'data_type'  => 'float',
			'label'      => 'Rugosity',
			'validation' => array(
				'required',
//				'numeric_min' => array(0),
			),
		),
	);

/*	protected static $_has_many = array(
		'powers' => array(
			'model_to' => 'Model_TurbinePower',
			'key_from' => 'turbine_id',
			'key_to' => 'turbine_id',
			'cascade_save' => true,
			'cascade_delete' => true,
		),
	);//*/
}
