<?php
// diretório base da aplicação
define('BASE_PATH', dirname(__FILE__));

$baseURL = dirname( $_SERVER["PHP_SELF"] ) == DIRECTORY_SEPARATOR ? "" : dirname( $_SERVER["PHP_SELF"] );
define( "ROOT", $baseURL );

function baseURL(){
	
	if( dirname( $_SERVER["PHP_SELF"] ) == DIRECTORY_SEPARATOR ) {
	   return $baseURL = "";
	}else{
	   return $baseURL = dirname( $_SERVER["PHP_SELF"] );
	}

}

session_start();

 
// credenciais de acesso ao MySQL
define('MYSQL_HOST', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASS', 'password');
define('MYSQL_DBNAME', 'database');
 
// configurações do PHP
ini_set('display_errors', true);
error_reporting(E_ALL);
setlocale(LC_ALL, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

