<?php

/* Database config */

$db_host		= 'localhost';

$db_user		= 'root';

$db_pass		= '';

$db_database	= 'openworl_qlt'; 



/* End config */



$db = new PDO('mysql:host='.$db_host.';dbname='.$db_database, $db_user, $db_pass);

$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



$conn = mysqli_connect($db_host,$db_user,$db_pass,$db_database);

	if($conn){

		$setLang = mysqli_query($conn,"SET NAMES 'utf8'");

	}else{

		die("Kết nối thất bại ".mysqli_connect_error());

	}



?>