<?php

$dbHost = 'localhost';
$dbName = 'gestionalumnos';
$dbUser = 'root';
$dbPass = '';
$pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUser, $dbPass) or die("Problemas de coneccion");


 function formatdate($rawstring){
	$stringarray =  explode(" ", $rawstring);
	$year = $stringarray[2];
	$day = str_replace (",", "", $stringarray[1]);
	$month = monthnumber($stringarray[0]);
	return $year.$month.$day;
}

function monthnumber($month){
	switch($month){
  case 'Jan': return "01";
  case 'Feb': return "02";
  case 'Mar': return "03";
  case 'Apr': return "04";
  case 'May': return "05";
  case 'Jun': return "06";
  case 'Jul': return "07";
  case 'Aug': return "08";
  case 'Sep': return "09";
  case 'Oct': return "10";
  case 'Nov': return "11";
  case 'Dec': return "12";
	}
};

?>