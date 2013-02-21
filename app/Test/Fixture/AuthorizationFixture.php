<?php
/**
 * AuthorizationFixture
 *
 */
class AuthorizationFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'primary'),
		'user_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'key' => 'index'),
		'demo_link_id' => array('type' => 'integer', 'null' => false, 'default' => null),
		'Name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 75, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Active' => array('type' => 'string', 'null' => true, 'default' => '1', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Created' => array('type' => 'date', 'null' => true, 'default' => null),
		'Updated' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'DynKey' => array('column' => array('user_id', 'demo_link_id'), 'unique' => 0)
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
			'user_id' => 1,
			'demo_link_id' => 1,
			'Name' => 'Lorem ipsum dolor sit amet',
			'Description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'Active' => 'Lorem ipsum dolor sit ame',
			'Created' => '2013-02-21',
			'Updated' => 1361404734
		),
	);

}
