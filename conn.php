<?php
	
	try{
		$bdd = new PDO("mysql:host=db4free.net;dbname=maikuchatsystem","maikucs","09051162247");
		echo "Connection Successful";
	}catch(Exception $e){
		die("ERROR : " .$e->getMessage());
	}
?>