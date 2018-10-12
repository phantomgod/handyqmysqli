<?php

	$DB_HOST = 'localhost';
	$DB_USER = 'biovazqu_avazque';
	$DB_PASS = 'mip@@@#5940';
	$DB_NAME = 'biovazqu_avazquez';
	
	try{
		$DB_con = new PDO("mysql:host={$DB_HOST};dbname={$DB_NAME}",$DB_USER,$DB_PASS);
		$DB_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e){
		echo $e->getMessage();
	}
	
