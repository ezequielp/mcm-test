<?php
/**
 * UserFixture
 *
 */
class UserFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'length' => 12, 'key' => 'primary'),
		'group_id' => array('type' => 'integer', 'null' => false, 'default' => '2'),
		'Email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 75, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'username' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 75, 'key' => 'unique', 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'password' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 75, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'FirstName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 75, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'MiddleInitial' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'LastName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 75, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Suffix' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 15, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Active' => array('type' => 'string', 'null' => true, 'default' => '1', 'length' => 1, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'Created' => array('type' => 'date', 'null' => true, 'default' => null),
		'Updated' => array('type' => 'timestamp', 'null' => false, 'default' => 'CURRENT_TIMESTAMP'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'Email' => array('column' => 'Email', 'unique' => 1),
			'username' => array('column' => 'username', 'unique' => 1)
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
			'group_id' => 1,
			'Email' => 'Lorem ipsum dolor sit amet',
			'username' => 'Lorem ipsum dolor sit amet',
			'password' => 'Lorem ipsum dolor sit amet',
			'FirstName' => 'Lorem ipsum dolor sit amet',
			'MiddleInitial' => 'Lorem ipsum dolor sit ame',
			'LastName' => 'Lorem ipsum dolor sit amet',
			'Suffix' => 'Lorem ipsum d',
			'Active' => 'Lorem ipsum dolor sit ame',
			'Created' => '2013-02-21',
			'Updated' => 1361404754
		),
	);

}
