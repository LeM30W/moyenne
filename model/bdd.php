<?php


class BDD
{
    protected function dbConnect()
    {	
    	$dns = 'mysql:host=localhost;dbname=infos_coda';
		$user = 'root';
		$mdp = '';
    	$options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);
        $db = new PDO($dns, $user, $mdp, $options);
		return $db;
    }
}