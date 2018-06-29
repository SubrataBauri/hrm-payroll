<?php
class Conf {

	var $smtphost;
	var $dbhost;
	var $dbport;
	var $dbname;
	var $dbuser;
	var $version;

	function __construct() {

		$this->dbhost	= 'demo.payroll.com';
		$this->dbport 	= '3306';
		if(defined('ENVIRNOMENT') && ENVIRNOMENT == 'test'){
		$this->dbname    = 'test_payroll';		
		}else {
		$this->dbname    = 'payroll';
		}
		$this->dbuser    = 'root';
		$this->dbpass	= 'root';
		$this->version = '4.0.1';

		$this->emailConfiguration = dirname(__FILE__).'/mailConf.php';
		$this->errorLog =  realpath(dirname(__FILE__).'/../logs/').'/';
	}
}
?>