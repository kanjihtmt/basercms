<?php 
/* SVN FILE: $Id$ */
/* MailConfigs schema generated on: 2010-11-04 18:11:13 : 1288863013*/
class MailConfigsSchema extends CakeSchema {
	public $name = 'MailConfigs';

	public $file = 'mail_configs.php';

	public $connection = 'plugin';

	public function before($event = array()) {
		return true;
	}

	public function after($event = array()) {
	}

	public $mail_configs = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'site_name' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'site_url' => array('type' => 'string', 'null' => true, 'default' => NULL),
		'site_email' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 50),
		'site_tel' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'site_fax' => array('type' => 'string', 'null' => true, 'default' => NULL, 'length' => 20),
		'created' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'modified' => array('type' => 'datetime', 'null' => true, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1))
	);
}
