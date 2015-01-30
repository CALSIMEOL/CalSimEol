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
				'max_length' => array(30),
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
				'numeric_between' => array(-180, 180),
			),
			'default' => '0',
		),
		'place_latitude' => array(
			'data_type'  => 'float',
			'label'      => 'Place Latitude (in degrees)',
			'validation' => array(
				'required',
				'numeric_between' => array(-90, 90),
			),
			'default' => '0',
		),
		'place_altitude' => array(
			'data_type'  => 'int',
			'label'      => 'Place Altitude (in meters)',
			'validation' => array(
				'required',
				'numeric_between' => array(-500, 8000),
			),
			'default' => '0',
		),
		'place_mean_temp' => array(
			'data_type'  => 'float',
			'label'      => 'Place Temp (in degrees celcius)',
			'validation' => array(
				'required',
				'numeric_between' => array(-50, 50),
			),
			'default' => '0',
		),
		'place_rugosity' => array(
			'data_type'  => 'float',
			'label'      => 'Rugosity',
			'validation' => array(
				'required',
				'numeric_between' => array(0.0002, 2),
			),
			'default' => '0',
		),
		'place_altitude_meas' => array(
			'data_type'  => 'int',
//			'label'      => '',
			'validation' => array(
				'required',
				'numeric_between' => array(-500, 8000),
			),
			'default' => '0',
		),
		'place_mean_speed' => array(
			'data_type'  => 'float',
//			'label'      => '',
			'validation' => array(
//				'required',
				'numeric_between' => array(0.1, 20),
			),
			'default' => '0',
		),
		'place_std_deviation' => array(
			'data_type'  => 'float',
//			'label'      => '',
			'validation' => array(
//				'required',
				'numeric_between' => array(0.1, 50),
			),
			'default' => '0',
		),
		'place_shape_factor' => array(
			'data_type'  => 'float',
//			'label'      => '',
			'validation' => array(
//				'required',
				'numeric_between' => array(0.5, 5),
			),
			'default' => '0',
		),
		'place_scale_factor' => array(
			'data_type'  => 'float',
//			'label'      => '',
			'validation' => array(
//				'required',
				'numeric_between' => array(0.1, 20),
			),
			'default' => '0',
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
