<?php

namespace App\Models;


//use \App\DB;
use \stdClass;

class Index{

	public static function getInfo(){

		$test = new \stdClass;
		$test->hello = 'Hello world!';


		return $test;	

	}

}