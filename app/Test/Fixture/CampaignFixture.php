<?php
/**
 * CampaignFixture
 *
 */
class CampaignFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'demo_link_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'unique'),
		'Name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 75, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'StartDate' => array('type' => 'date', 'null' => true, 'default' => null),
		'EndDate' => array('type' => 'date', 'null' => true, 'default' => null),
		'Active' => array('type' => 'string', 'null' => true, 'default' => '1', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Created' => array('type' => 'date', 'null' => true, 'default' => null),
		'Updated' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'demo_link_id' => array('column' => 'demo_link_id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'demo_link_id' => 1,
			'Name' => 'Lorem ipsum dolor sit amet',
			'StartDate' => '2013-02-21',
			'EndDate' => '2013-02-21',
			'Active' => 'Lorem ipsum dolor sit ame',
			'Created' => '2013-02-21',
			'Updated' => 1361404744
		),
	);

}
