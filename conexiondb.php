<?php
	try {
		$serverName = "localhost";

		$database ="proyectoservi";
		//$database ="id19215195_servielectronic";


		$userName="root";
		//$userName="id19215195_servielectronic801";

		$userPass="";
		//$userPass="@ElectronicServi01";


		$conn = new PDO("mysql:host=$serverName; dbname=$database", "$userName", "$userPass");  
		$conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

        echo "conexion exitosa";
	}catch(Exception $e){
		echo "conexion erronea";
        die(print_r($e->getMessage()));
            
	}
