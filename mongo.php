<?php 

require 'vendor/autoload.php';

/**
* 
*/
class Mongo {
	
	function __construct(){
		
	}

	public function getClient(){
		return new MongoDB\Client;
	}
}

 ?>