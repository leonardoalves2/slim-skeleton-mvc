<?php

namespace App\Controllers;

use \App\Models\Index;


Class IndexController{

	public function index(){

		$test = Index::getInfo();

		\App\View::make('index.test',['test' => $test]);

	}

}